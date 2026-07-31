<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');

function responder(int $status, bool $ok, string $message): never
{
    http_response_code($status);
    echo json_encode(
        ['ok' => $ok, 'message' => $message],
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
    );
    exit;
}

function limpiar_linea(string $value, int $maxLength = 200): string
{
    $value = trim(strip_tags($value));
    $value = str_replace(["\r", "\n"], ' ', $value);
    return mb_substr($value, 0, $maxLength);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    responder(405, false, 'Método no permitido.');
}

/* Honeypot anti-spam */
if (!empty($_POST['website'] ?? '')) {
    responder(200, true, 'Gracias. Tu información fue recibida.');
}

$perfil    = limpiar_linea((string)($_POST['perfil'] ?? ''), 30);
$nombre    = limpiar_linea((string)($_POST['nombre'] ?? ''), 120);
$telefono  = limpiar_linea((string)($_POST['telefono'] ?? ''), 30);
$email     = filter_var(trim((string)($_POST['email'] ?? '')), FILTER_SANITIZE_EMAIL);
$empresa   = limpiar_linea((string)($_POST['empresa'] ?? ''), 160);
$pais      = limpiar_linea((string)($_POST['pais'] ?? ''), 80);
$ciudad    = limpiar_linea((string)($_POST['ciudad'] ?? ''), 100);
$servicio  = limpiar_linea((string)($_POST['servicio'] ?? ''), 160);
$mensaje   = trim(strip_tags((string)($_POST['mensaje'] ?? '')));
$mensaje   = mb_substr($mensaje, 0, 3000);
$politicas = isset($_POST['politicas']) && $_POST['politicas'] === '1';
$newsletter = isset($_POST['newsletter']) && $_POST['newsletter'] === '1';

$errores = [];

if (!in_array($perfil, ['personas', 'empresas'], true)) {
    $errores[] = 'Selecciona un perfil válido.';
}
if ($nombre === '') {
    $errores[] = 'El nombre es obligatorio.';
}
if ($telefono === '') {
    $errores[] = 'El teléfono es obligatorio.';
}
if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = 'El correo electrónico no es válido.';
}
if ($perfil === 'empresas' && $empresa === '') {
    $errores[] = 'La empresa es obligatoria para el perfil Empresas.';
}
if ($pais === '') {
    $errores[] = 'El país es obligatorio.';
}
if ($ciudad === '') {
    $errores[] = 'La ciudad es obligatoria.';
}
if (!$politicas) {
    $errores[] = 'Debes aceptar las políticas de tratamiento de datos.';
}

if ($errores !== []) {
    responder(422, false, implode(' ', $errores));
}

/*
 * IMPORTANTE:
 * Cambia contacto@vasquezkennedy.com por una cuenta que exista en el mismo
 * dominio y esté autorizada para enviar correo desde tu hosting.
 */
$destinatario = 'diana.ruiz@vasquezkennedy.com';
$remitente = 'contacto@vasquezkennedy.com';
$asunto = 'Nuevo contacto web - ' . ($perfil === 'empresas' ? 'Empresa' : 'Persona');

$contenido = [
    'Se recibió una nueva solicitud desde el formulario web.',
    '',
    'Perfil: ' . ($perfil === 'empresas' ? 'Empresas' : 'Personas'),
    'Nombre: ' . $nombre,
    'Teléfono: ' . $telefono,
    'Correo: ' . $email,
    'Empresa: ' . ($empresa !== '' ? $empresa : 'No aplica'),
    'País: ' . $pais,
    'Ciudad: ' . $ciudad,
    'Servicio: ' . ($servicio !== '' ? $servicio : 'No especificado'),
    'Newsletter: ' . ($newsletter ? 'Sí' : 'No'),
    '',
    'Mensaje:',
    $mensaje !== '' ? $mensaje : 'Sin mensaje adicional.',
    '',
    'Fecha del servidor: ' . date('Y-m-d H:i:s'),
    'IP: ' . ($_SERVER['REMOTE_ADDR'] ?? 'No disponible'),
];

$cuerpo = implode("\r\n", $contenido);

$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'From: Vásquez Kennedy Web <' . $remitente . '>',
    'Reply-To: ' . $nombre . ' <' . $email . '>',
    'X-Mailer: PHP/' . PHP_VERSION,
];

$enviado = mail(
    $destinatario,
    '=?UTF-8?B?' . base64_encode($asunto) . '?=',
    $cuerpo,
    implode("\r\n", $headers)
);

if (!$enviado) {
    error_log('No se pudo enviar el formulario de contacto a ' . $destinatario);
    responder(
        500,
        false,
        'No fue posible enviar el mensaje. Verifica la configuración de correo del servidor.'
    );
}

responder(200, true, 'Gracias. Tu mensaje fue enviado correctamente.');