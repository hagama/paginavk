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
    $query = $db->prepare('SELECT o.id, o.nombre1, o.identificacion, o.celular, o.telefono, s.empresafin, s.sitiowebfin, s.sectoreconomicofin, s.ubicacionfin, s.rangoventasfin, s.empleadosfin, s.cargofin, s.gerencialfin, s.responsableghfin, s.cargoghfin, s.correoghfin, s.celularghfin, s.tiempofin, s.canalfin, s.mmfin, s.cambioc, s.cambiop FROM outp o LEFT JOIN sesiones s ON s.id = o.id WHERE o.identificacion = ? ORDER BY o.id DESC LIMIT 1');
    $query->execute([$document]);
    $row = $query->fetch();
    if (!$row) return null;
    $level = mb_strtoupper(trim((string) ($row['gerencialfin'] ?? '')));
    $channel = mb_strtoupper(trim((string) ($row['canalfin'] ?? '')));
    $time = trim((string) ($row['tiempofin'] ?? ''));
    $personalPhone = trim((string) (($row['celular'] ?? '') !== '' ? $row['celular'] : ($row['telefono'] ?? '')));
    return [
        'full_name' => trim((string) ($row['nombre1'] ?? '')),
        'document_id' => $document,
        'personal_phone' => $personalPhone,
        'company_name' => trim((string) ($row['empresafin'] ?? '')),
        'company_website' => trim((string) ($row['sitiowebfin'] ?? '')),
        'company_sector' => trim((string) ($row['sectoreconomicofin'] ?? '')),
        'company_location' => trim((string) ($row['ubicacionfin'] ?? '')),
        'annual_sales' => trim((string) ($row['rangoventasfin'] ?? '')),
        'employee_count' => trim((string) ($row['empleadosfin'] ?? '')),
        'job_title' => trim((string) ($row['cargofin'] ?? '')),
        'job_level' => ['ALTA GERENCIA' => 'ALTA DIRECCIÓN', 'NO DIRECTIVO' => 'PROFESIONAL'][$level] ?? $level,
        'hr_name' => trim((string) ($row['responsableghfin'] ?? '')),
        'hr_position' => trim((string) ($row['cargoghfin'] ?? '')),
        'hr_email' => trim((string) ($row['correoghfin'] ?? '')),
        'hr_phone' => trim((string) ($row['celularghfin'] ?? '')),
        'relocation_time' => preg_match('/\d+/', $time, $matches) ? $matches[0] : '',
        'relocation_unit' => stripos($time, 'SEMANA') !== false ? 'Semanas' : 'Meses',
        'changed_sector' => strtoupper(trim((string) ($row['cambioc'] ?? ''))) === 'SI' ? 'SI' : (strtoupper(trim((string) ($row['cambioc'] ?? ''))) === 'NO' ? 'No' : ''),
        'changed_profession' => strtoupper(trim((string) ($row['cambiop'] ?? ''))) === 'SI' ? 'SI' : (strtoupper(trim((string) ($row['cambiop'] ?? ''))) === 'NO' ? 'No' : ''),
        'vacancy_channel' => ['CONTACTOS PERSONALES' => 'RED DE CONTACTOS PERSONALES', 'MEDIOS DIGITALES' => 'REDES DIGITALES'][$channel] ?? $channel,
        'salary_comparison' => in_array(mb_convert_case(trim((string) ($row['mmfin'] ?? '')), MB_CASE_TITLE, 'UTF-8'), ['Superior', 'Similar', 'Inferior'], true) ? mb_convert_case(trim((string) $row['mmfin']), MB_CASE_TITLE, 'UTF-8') : '',
    ];
}

function alumni_send_notification(array $values): bool
{
    $recipients = ['mauricio.vasquez@vasquezkennedy.com', 'monica.cubides@vasquezkennedy.com', 'harold.gama@vasquezkennedy.com'];
    $name = trim((string) ($values['full_name'] ?? ''));
    $document = trim((string) ($values['document_id'] ?? ''));
    $phone = trim((string) ($values['personal_phone'] ?? ''));
    $body = "Se llenó o actualizó el formulario Alumni de Vásquez Kennedy.\n\n"
        . "Nombre: {$name}\nCédula: {$document}\nCelular: {$phone}\n";
    $subject = 'Formulario Alumni actualizado';

    try {
        if (class_exists(\PHPMailer\PHPMailer\PHPMailer::class)) {
            $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
            $host = trim((string) envv('MAIL_HOST', ''));
            if ($host !== '') {
                $mail->isSMTP();
                $mail->Host = $host;
                $mail->Port = (int) envv('MAIL_PORT', 587);
                $mail->SMTPAuth = (string) envv('MAIL_USERNAME', '') !== '';
                $mail->Username = (string) envv('MAIL_USERNAME', '');
                $mail->Password = (string) envv('MAIL_PASSWORD', '');
                $encryption = strtolower((string) envv('MAIL_ENCRYPTION', 'tls'));
                if ($encryption === 'ssl') $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
                elseif ($encryption === 'tls') $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            } else {
                $mail->isMail();
            }
            $mail->CharSet = 'UTF-8';
            $mail->setFrom((string) envv('MAIL_FROM', 'eventos@vasquezkennedy.com'), (string) envv('MAIL_FROM_NAME', 'Vasquez Kennedy'));
            foreach ($recipients as $recipient) $mail->addAddress($recipient);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->send();
            return true;
        }

        $from = (string) envv('MAIL_FROM', '');
        if (!function_exists('mail') || !filter_var($from, FILTER_VALIDATE_EMAIL)) return false;
        $headers = "From: " . str_replace(["\r", "\n"], '', (string) envv('MAIL_FROM_NAME', 'Vasquez Kennedy')) . " <{$from}>\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
        return mail(implode(',', $recipients), $encodedSubject, $body, $headers);
    } catch (Throwable $error) {
        error_log('Alumni notification email failed: ' . $error->getMessage());
        return false;
    }
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
        $stored = is_array($stored) ? $stored : [];
        // Recuperar rangos que las versiones anteriores guardaron solo en el JSON.
        if (($source['employee_count'] === '' || ctype_digit($source['employee_count']))
            && in_array(($stored['employee_count'] ?? ''), ['1 a 10', '11 a 50', '51 a 200', '201 a 500', 'Más de 500'], true)) {
            $source['employee_count'] = $stored['employee_count'];
        }
        if (ctype_digit($source['employee_count']) && (int) $source['employee_count'] > 0) {
            $count = (int) $source['employee_count'];
            $source['employee_count'] = $count <= 10 ? '1 a 10' : ($count <= 50 ? '11 a 50' : ($count <= 200 ? '51 a 200' : ($count <= 500 ? '201 a 500' : 'Más de 500')));
        }
        // La ficha de sesiones es la fuente de los campos compartidos.
        json_response(['data' => array_merge($stored, $source)]);
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
    $profileQuery = $db->prepare('SELECT id, celular, telefono FROM outp WHERE identificacion = ? ORDER BY id DESC LIMIT 1');
    $profileQuery->execute([$document]);
    $profile = $profileQuery->fetch();
    if (!$profile) json_response(['error' => 'No encontramos el registro original para actualizarlo. Vuelve a consultar tu cédula.'], 404);
    $profileId = (int) $profile['id'];
    $values['personal_phone'] = trim((string) (($profile['celular'] ?? '') !== '' ? $profile['celular'] : ($profile['telefono'] ?? '')));

    $levelMap = ['Alta gerencia' => 'ALTA DIRECCIÓN', 'Gerencia media' => 'GERENCIA MEDIA', 'No directivo' => 'PROFESIONAL'];
    $channelMap = ['Contactos personales' => 'RED DE CONTACTOS PERSONALES', 'Cazatalentos' => 'CAZATALENTOS', 'Medios digitales' => 'REDES DIGITALES'];
    $time = '';
    if ($values['relocation_time'] !== '') {
        $amount = (int) $values['relocation_time'];
        $unit = $values['relocation_unit'] === 'Semanas' ? 'SEMANA' : 'MES';
        $time = $amount . ' ' . ($unit === 'SEMANA' ? ($amount === 1 ? 'SEMANA' : 'SEMANAS') : ($amount === 1 ? 'MES' : 'MESES'));
    }

    $db->beginTransaction();
    try {
        $sessionExists = $db->prepare('SELECT id FROM sesiones WHERE id = ?');
        $sessionExists->execute([$profileId]);
        if ($sessionExists->fetchColumn() === false) {
            throw new RuntimeException('No existe la ficha de sesiones para el registro.');
        }
        // La respuesta InnoDB se puede revertir si falla la ficha MyISAM.
        $responseUpdate = $db->prepare('INSERT INTO alumni_responses (document_id, response_json, created_at, updated_at) VALUES (?, ?, NOW(), NOW()) ON DUPLICATE KEY UPDATE response_json = VALUES(response_json), updated_at = NOW()');
        $responseUpdate->execute([$document, json_encode($values, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR)]);
        $personUpdate = $db->prepare('UPDATE outp SET nombre1 = ? WHERE id = ?');
        $personUpdate->execute([$values['full_name'], $profileId]);
        $sessionUpdate = $db->prepare('UPDATE sesiones SET empresafin = ?, sitiowebfin = ?, sectoreconomicofin = ?, ubicacionfin = ?, rangoventasfin = ?, empleadosfin = ?, cargofin = ?, gerencialfin = ?, responsableghfin = ?, cargoghfin = ?, correoghfin = ?, celularghfin = ?, tiempofin = ?, cambioc = ?, cambiop = ?, canalfin = ?, mmfin = ?, fecha_actualizacion_reubicacion = CURRENT_DATE() WHERE id = ?');
        $sessionUpdate->execute([
            $values['company_name'], $values['company_website'], $values['company_sector'], $values['company_location'],
            $values['annual_sales'], $values['employee_count'], $values['job_title'], $levelMap[$values['job_level']] ?? $values['job_level'],
            $values['hr_name'], $values['hr_position'], $values['hr_email'], $values['hr_phone'], $time,
            strtoupper($values['changed_sector']), strtoupper($values['changed_profession']),
            $channelMap[$values['vacancy_channel']] ?? $values['vacancy_channel'], $values['salary_comparison'], $profileId,
        ]);

        $db->commit();
    } catch (Throwable $error) {
        if ($db->inTransaction()) $db->rollBack();
        throw $error;
    }
    $emailSent = alumni_send_notification($values);
    json_response(['message' => $emailSent
        ? 'Tus datos se guardaron y el aviso fue enviado a Mauricio y Mónica.'
        : 'Tus datos se guardaron, pero no se pudo enviar el aviso. Revisa la configuración de correo del servidor.']);
} catch (Throwable $error) {
    error_log('Alumni: ' . $error->getMessage());
    json_response(['error' => 'No fue posible conectar o guardar los datos. Contacta al administrador.'], 503);
}
