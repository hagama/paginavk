<?php

if (!headers_sent()) {
    header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
    header('Pragma: no-cache');
    header('Expires: 0');
}

function asset_url(string $url): string
{
    $path = preg_replace('#^(?:\.\./)+#', '', $url);
    $path = ltrim((string) $path, '/');
    $file = __DIR__ . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $path);

    if (!is_file($file)) {
        return $url;
    }

    $separator = strpos($url, '?') !== false ? '&' : '?';

    return $url . $separator . 'v=' . filemtime($file);
}

function absolute_site_url(string $path = ''): string
{
    $forwardedProto = strtolower((string) ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? ''));
    $isHttps = (!empty($_SERVER['HTTPS']) && strtolower((string) $_SERVER['HTTPS']) !== 'off')
        || $forwardedProto === 'https';
    $scheme = $isHttps ? 'https' : 'http';
    $host = preg_replace('/[^a-z0-9.\-:\[\]]/i', '', (string) ($_SERVER['HTTP_HOST'] ?? 'localhost'));

    if ($path === '') {
        $path = strtok((string) ($_SERVER['REQUEST_URI'] ?? '/'), '?');
    }

    return $scheme . '://' . $host . '/' . ltrim($path, '/');
}

function render_open_graph(): void
{
    $title = 'Vásquez Kennedy - Career Success';
    $description = 'Tres décadas acompañando el desarrollo del éxito de más de 15.000 profesionales en el éxito de sus carreras. Tecnología avanzada e IA para el desarrollo de los empleados. Un equipo humano HUMANO.';
    $image = absolute_site_url('/recursos-multimedia/logos/logo-vasquez-kennedy.webp');
    $url = absolute_site_url();
    $escape = static function (string $value): string {
        return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    };

    echo '    <meta name="description" content="' . $escape($description) . '">' . PHP_EOL;
    echo '    <meta property="og:locale" content="es_CO">' . PHP_EOL;
    echo '    <meta property="og:type" content="website">' . PHP_EOL;
    echo '    <meta property="og:site_name" content="Vásquez Kennedy">' . PHP_EOL;
    echo '    <meta property="og:title" content="' . $escape($title) . '">' . PHP_EOL;
    echo '    <meta property="og:description" content="' . $escape($description) . '">' . PHP_EOL;
    echo '    <meta property="og:url" content="' . $escape($url) . '">' . PHP_EOL;
    echo '    <meta property="og:image" content="' . $escape($image) . '">' . PHP_EOL;
    echo '    <meta property="og:image:type" content="image/webp">' . PHP_EOL;
    echo '    <meta property="og:image:width" content="1526">' . PHP_EOL;
    echo '    <meta property="og:image:height" content="647">' . PHP_EOL;
    echo '    <meta property="og:image:alt" content="Logo de Vásquez Kennedy - Career Success">' . PHP_EOL;
    echo '    <meta name="twitter:card" content="summary_large_image">' . PHP_EOL;
    echo '    <meta name="twitter:title" content="' . $escape($title) . '">' . PHP_EOL;
    echo '    <meta name="twitter:description" content="' . $escape($description) . '">' . PHP_EOL;
    echo '    <meta name="twitter:image" content="' . $escape($image) . '">' . PHP_EOL;
}
