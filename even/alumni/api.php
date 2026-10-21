<?php
declare(strict_types=1);

require dirname(__DIR__) . '/bootstrap.php';

header('Cache-Control: no-store');

function alumni_connection(string $prefix): PDO
{
    foreach (['HOST', 'DATABASE', 'USERNAME', 'PASSWORD'] as $part) {
        if ((string) envv($prefix . '_' . $part, '') === '') {
            throw new RuntimeException('Configuración de base de datos incompleta.');
        }
    }
    $host = (string) envv($prefix . '_HOST');
    $port = (string) envv($prefix . '_PORT', '3306');
    $database = (string) envv($prefix . '_DATABASE');
    return new PDO("mysql:host={$host};port={$port};dbname={$database};charset=utf8mb4", (string) envv($prefix . '_USERNAME'), (string) envv($prefix . '_PASSWORD'), [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
}

function alumni_document(mixed $value): string
{
    $document = preg_replace('/[.\s-]+/', '', trim((string) $value));
    if (!is_string($document) || !preg_match('/^[0-9]{3,20}$/D', $document)) {
        json_response(['error' => 'Ingresa una cédula válida de 3 a 20 dígitos.'], 422);
    }
    return $document;
}

function alumni_source(PDO $db, string $document): ?array
{
    $query = $db->prepare('SELECT o.id, o.nombre1, o.identificacion, s.empresafin, s.sitiowebfin, s.sectoreconomicofin, s.ubicacionfin, s.rangoventasfin, s.empleadosfin, s.cargofin, s.gerencialfin, s.responsableghfin, s.cargoghfin, s.correoghfin, s.celularghfin, s.tiempofin, s.canalfin, s.mmfin FROM outp o LEFT JOIN sesiones s ON s.id = o.id WHERE o.identificacion = ? ORDER BY o.id DESC LIMIT 1');
    $query->execute([$document]);
    $row = $query->fetch();
    if (!$row) return null;
    $level = mb_strtoupper(trim((string) ($row['gerencialfin'] ?? '')));
    $channel = mb_strtoupper(trim((string) ($row['canalfin'] ?? '')));
    $time = trim((string) ($row['tiempofin'] ?? ''));
    return [
        'full_name' => trim((string) ($row['nombre1'] ?? '')),
        'document_id' => $document,
        'company_name' => trim((string) ($row['empresafin'] ?? '')),
        'company_website' => trim((string) ($row['sitiowebfin'] ?? '')),
        'company_sector' => trim((string) ($row['sectoreconomicofin'] ?? '')),
        'company_location' => trim((string) ($row['ubicacionfin'] ?? '')),
        'annual_sales' => trim((string) ($row['rangoventasfin'] ?? '')),
        'employee_count' => trim((string) ($row['empleadosfin'] ?? '')),
        'job_title' => trim((string) ($row['cargofin'] ?? '')),
        'job_level' => str_contains($level, 'ALTA') ? 'Alta gerencia' : (str_contains($level, 'MEDIA') ? 'Gerencia media' : ($level !== '' ? 'No directivo' : '')),
        'hr_name' => trim((string) ($row['responsableghfin'] ?? '')),
        'hr_position' => trim((string) ($row['cargoghfin'] ?? '')),
        'hr_email' => trim((string) ($row['correoghfin'] ?? '')),
        'hr_phone' => trim((string) ($row['celularghfin'] ?? '')),
        'relocation_time' => preg_match('/\d+/', $time, $matches) ? $matches[0] : '',
        'relocation_unit' => 'Meses',
        'vacancy_channel' => str_contains($channel, 'CAZATALENTOS') ? 'Cazatalentos' : (str_contains($channel, 'DIGITAL') ? 'Medios digitales' : (str_contains($channel, 'CONTACTOS') ? 'Contactos personales' : '')),
        'salary_comparison' => in_array(mb_convert_case(trim((string) ($row['mmfin'] ?? '')), MB_CASE_TITLE, 'UTF-8'), ['Superior', 'Similar', 'Inferior'], true) ? mb_convert_case(trim((string) $row['mmfin']), MB_CASE_TITLE, 'UTF-8') : '',
    ];
}

try {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        json_response(['csrf' => csrf()]);
    }
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') json_response(['error' => 'Método no permitido.'], 405);
    $payload = json_decode(file_get_contents('php://input') ?: '', true);
    if (!is_array($payload) || !hash_equals(csrf(), (string) ($payload['csrf'] ?? ''))) {
        json_response(['error' => 'La sesión venció. Recarga la página e intenta de nuevo.'], 403);
    }
    $action = (string) ($payload['action'] ?? '');
    $document = alumni_document($payload['document_id'] ?? '');
    if ($action === 'lookup') {
        $attempts = array_filter($_SESSION['alumni_lookups'] ?? [], static fn ($time) => is_int($time) && $time > time() - 600);
        if (count($attempts) >= 10) json_response(['error' => 'Demasiadas consultas. Intenta de nuevo en 10 minutos.'], 429);
        $attempts[] = time();
        $_SESSION['alumni_lookups'] = $attempts;
        $source = alumni_source(alumni_connection('CONEKTA_DB'), $document);
        if ($source === null) json_response(['error' => 'No encontramos esta cédula en Conekta. Verifica el número o contacta a VK.'], 404);
        $_SESSION['alumni_document'] = $document;
        $_SESSION['alumni_verified_at'] = time();
        $savedQuery = alumni_connection('VK_DB')->prepare('SELECT response_json FROM alumni_responses WHERE document_id = ? LIMIT 1');
        $savedQuery->execute([$document]);
        $saved = $savedQuery->fetchColumn();
        $stored = $saved ? json_decode((string) $saved, true) : [];
        json_response(['data' => array_merge($source, is_array($stored) ? $stored : [])]);
    }
    if ($action !== 'save') json_response(['error' => 'Acción no válida.'], 400);
    if (($_SESSION['alumni_document'] ?? '') !== $document || (int) ($_SESSION['alumni_verified_at'] ?? 0) < time() - 1800) {
        json_response(['error' => 'Vuelve a consultar tu cédula antes de guardar.'], 403);
    }
    $fields = ['full_name', 'company_name', 'company_website', 'company_sector', 'company_location', 'annual_sales', 'employee_count', 'job_title', 'job_level', 'hr_name', 'hr_position', 'hr_email', 'hr_phone', 'relocation_time', 'relocation_unit', 'vacancy_channel', 'changed_sector', 'changed_profession', 'salary_comparison', 'job_enjoyment'];
    $values = ['document_id' => $document];
    foreach ($fields as $field) {
        $value = trim((string) ($payload['data'][$field] ?? ''));
        if (mb_strlen($value) > 500) json_response(['error' => 'Uno de los campos es demasiado largo.'], 422);
        $values[$field] = $value;
    }
    foreach (['full_name', 'company_name', 'company_sector', 'company_location', 'job_title', 'job_level'] as $required) {
        if ($values[$required] === '') json_response(['error' => 'Completa los campos obligatorios.'], 422);
    }
    if ($values['hr_email'] !== '' && !filter_var($values['hr_email'], FILTER_VALIDATE_EMAIL)) json_response(['error' => 'El correo de gestión humana no es válido.'], 422);
    if ($values['company_website'] !== '' && !filter_var($values['company_website'], FILTER_VALIDATE_URL)) json_response(['error' => 'El sitio web no es válido.'], 422);
    $db = alumni_connection('VK_DB');
    $query = $db->prepare('INSERT INTO alumni_responses (document_id, response_json, created_at, updated_at) VALUES (?, ?, NOW(), NOW()) ON DUPLICATE KEY UPDATE response_json = VALUES(response_json), updated_at = NOW()');
    $query->execute([$document, json_encode($values, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR)]);
    json_response(['message' => 'Tus datos se guardaron correctamente.']);
} catch (Throwable $error) {
    error_log('Alumni: ' . $error->getMessage());
    json_response(['error' => 'No fue posible conectar o guardar los datos. Contacta al administrador.'], 503);
}
