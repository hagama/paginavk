<?php
declare(strict_types=1);
$vendorAutoload=__DIR__.'/vendor/autoload.php';
if (is_file($vendorAutoload)) {
    require $vendorAutoload;
} else {
    // Permite que la interfaz y la integración nativa de Calendly funcionen aun
    // antes de instalar Composer. Google Sheets y PHPMailer sí requieren vendor.
    spl_autoload_register(static function(string $class): void {
        if (str_starts_with($class,'App\\')) {
            $file=__DIR__.'/app/'.str_replace('\\','/',substr($class,4)).'.php';
            if (is_file($file)) require $file;
        }
    });
}
if (file_exists(__DIR__.'/.env')) {
    if (class_exists(Dotenv\Dotenv::class)) {
        Dotenv\Dotenv::createImmutable(__DIR__)->safeLoad();
    } else {
        foreach (file(__DIR__.'/.env',FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES) ?: [] as $line) {
            $line=trim($line);
            if ($line==='' || str_starts_with($line,'#') || !str_contains($line,'=')) continue;
            [$key,$value]=array_map('trim',explode('=',$line,2));
            $value=trim($value,"\"'");
            if (!array_key_exists($key,$_ENV)) $_ENV[$key]=$value;
        }
    }
}
date_default_timezone_set('America/Bogota');
if (session_status() !== PHP_SESSION_ACTIVE) { session_name('calendl_session'); session_set_cookie_params(['httponly'=>true,'samesite'=>'Lax','secure'=>(!empty($_SERVER['HTTPS']))]); session_start(); }
header('X-Content-Type-Options: nosniff'); header('X-Frame-Options: DENY'); header('Referrer-Policy: same-origin');
function envv(string $key, mixed $default=null): mixed { return $_ENV[$key] ?? $_SERVER[$key] ?? $default; }
function db(): PDO { static $pdo; if (!$pdo) {$dsn='mysql:host='.envv('DB_HOST','127.0.0.1').';port='.envv('DB_PORT','3306').';dbname='.envv('DB_DATABASE','calendl').';charset=utf8mb4'; $pdo=new PDO($dsn,(string)envv('DB_USERNAME','root'),(string)envv('DB_PASSWORD',''),[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,PDO::ATTR_EMULATE_PREPARES=>false]);} return $pdo; }
function csrf(): string { return $_SESSION['csrf'] ??= bin2hex(random_bytes(32)); }
function json_response(array $data,int $status=200): never { http_response_code($status); header('Content-Type: application/json; charset=utf-8'); echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES); exit; }
function mask(string $v): string { return strlen($v)<5?'***':substr($v,0,2).'***'.substr($v,-2); }
