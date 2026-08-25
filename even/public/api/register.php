<?php
require dirname(__DIR__, 2) . '/bootstrap.php';
use App\Services\{CalendlyService, GoogleSheetsService, MailService};

if ($_SERVER['REQUEST_METHOD'] !== 'POST') json_response(['message' => 'Método no permitido'], 405);
if (!hash_equals(csrf(), $_POST['csrf'] ?? '')) json_response(['message' => 'Sesión expirada. Recarga la página.'], 419);

$attempts = array_values(array_filter($_SESSION['attempts'] ?? [], fn($time) => $time > time() - 60));
if (count($attempts) >= 5) json_response(['message' => 'Demasiados intentos. Espera un minuto.'], 429);
$_SESSION['attempts'] = [...$attempts, time()];
$required = ['first_name', 'last_name', 'email', 'phone', 'country', 'profession', 'position', 'company'];
foreach ($required as $key) if (trim((string) ($_POST[$key] ?? '')) === '') json_response(['message' => 'Falta completar: ' . $key], 422);
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) json_response(['message' => 'Correo inválido'], 422);
if (($_POST['data_consent'] ?? '') !== 'Sí') json_response(['message' => 'Debes autorizar el tratamiento de datos para continuar.'], 422);

$event = event_config();
$local = event_start($event);
$utc = $local->setTimezone(new DateTimeZone('UTC'));
if ($utc < new DateTimeImmutable('now', new DateTimeZone('UTC'))) json_response(['message' => 'El horario configurado ya pasó. Comunícate con el administrador.'], 422);
$_POST['timezone'] = $event['timezone'];
$_POST['selected_date'] = $event['date'];
$_POST['selected_start_utc'] = $utc->format('Y-m-d\TH:i:s\Z');
$email = strtolower(trim((string) $_POST['email']));
$answers = $_POST;
unset($answers['csrf']);

try {
    $pdo = db();
    $duplicate = $pdo->prepare('SELECT id FROM registrations WHERE email=? LIMIT 1');
    $duplicate->execute([$email]);
    if ($duplicate->fetchColumn() !== false) json_response(['message' => 'Este correo ya está inscrito anteriormente.'], 409);
    $uuid = sprintf('%s-%s-4%s-%s%s-%s', bin2hex(random_bytes(4)), bin2hex(random_bytes(2)), substr(bin2hex(random_bytes(2)), 1), dechex(random_int(8, 11)), substr(bin2hex(random_bytes(2)), 1), bin2hex(random_bytes(6)));
    $key = hash('sha256', $email . '|' . $event['calendly_event_type_uri'] . '|' . $utc->format('c') . '|' . $uuid);
    $pdo->beginTransaction();
    $q = $pdo->prepare("INSERT INTO registrations(uuid,full_name,email,phone,timezone,selected_start_local,selected_start_utc,status,form_response_json,idempotency_key) VALUES(?,?,?,?,?,?,?,'processing',?,?)");
    $q->execute([$uuid, trim($_POST['first_name'] . ' ' . $_POST['last_name']), $email, $_POST['phone'], $event['timezone'], $local->format('Y-m-d H:i:s'), $utc->format('Y-m-d H:i:s'), json_encode($answers, JSON_UNESCAPED_UNICODE), $key]);
    $id = (int) $pdo->lastInsertId();
    $pdo->commit();

    try {
        $cal = new CalendlyService();
        $nowUtc = new DateTimeImmutable('now', new DateTimeZone('UTC'));
        $from = $nowUtc->modify('+1 minute');
        $to = $utc->setTime(23, 59, 59);
        if ($to <= $from) $to = $from->modify('+1 day');
        $check = $cal->availability($from->format('Y-m-d\TH:i:s\Z'), $to->format('Y-m-d\TH:i:s\Z'));
        $available = array_filter($check['collection'] ?? [], fn($slot) => isset($slot['start_time']) && strtotime((string) $slot['start_time']) === $utc->getTimestamp());
        if (!$available) throw new RuntimeException('Calendly no ofreció el horario configurado.');
        $result = $cal->createInvitee(trim($_POST['first_name'] . ' ' . $_POST['last_name']), $email, $event['timezone'], $utc->format('Y-m-d\TH:i:s\Z'));
        $resource = $result['resource'] ?? $result;
        $eventUri = $resource['event'] ?? '';
        $inviteeUri = $resource['uri'] ?? '';
        $update = $pdo->prepare("UPDATE registrations SET status='scheduled',calendly_event_uri=?,calendly_event_uuid=?,calendly_invitee_uri=?,calendly_invitee_uuid=?,cancel_url=?,reschedule_url=?,calendly_response_json=?,error_message=NULL WHERE id=?");
        $update->execute([$eventUri, basename($eventUri), $inviteeUri, basename($inviteeUri), $resource['cancel_url'] ?? '', $resource['reschedule_url'] ?? '', json_encode($result), $id]);
    } catch (Throwable $calendlyError) {
        $pdo->prepare("UPDATE registrations SET status='pending',error_message=? WHERE id=?")->execute([$calendlyError->getMessage(), $id]);
        $pdo->prepare("INSERT INTO integration_logs(registration_id,service,action,success,error_message) VALUES(?,'calendly','create_invitee',0,?)")->execute([$id, $calendlyError->getMessage()]);
    }
    $row = $pdo->query('SELECT * FROM registrations WHERE id=' . $id)->fetch();
    $row['answers'] = $answers;
    try { (new GoogleSheetsService())->append($row); $pdo->prepare('UPDATE registrations SET sheets_synced_at=NOW() WHERE id=?')->execute([$id]); } catch (Throwable $e) { $pdo->prepare("INSERT INTO integration_logs(registration_id,service,action,success,error_message) VALUES(?,'google_sheets','append',0,?)")->execute([$id, $e->getMessage()]); }
    try { (new MailService())->send($row); $pdo->prepare('UPDATE registrations SET email_sent_at=NOW() WHERE id=?')->execute([$id]); } catch (Throwable $e) { $pdo->prepare("INSERT INTO integration_logs(registration_id,service,action,success,error_message) VALUES(?,'mail','send',0,?)")->execute([$id, $e->getMessage()]); }
    json_response(['ok' => true, 'uuid' => $uuid]);
} catch (Throwable $e) {
    if (isset($pdo) && $pdo->inTransaction()) $pdo->rollBack();
    if (isset($id)) $pdo->prepare("UPDATE registrations SET status='failed',error_message=? WHERE id=?")->execute([$e->getMessage(), $id]);
    json_response(['message' => $e->getMessage()], $e->getCode() === 409 ? 409 : 500);
}
