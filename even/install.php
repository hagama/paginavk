<?php
if(PHP_SAPI!=='cli'){http_response_code(403);exit('Ejecute desde consola: php install.php');}
require __DIR__.'/bootstrap.php';
$sql=file_get_contents(__DIR__.'/database/migrations/001_initial.sql');
$dsn='mysql:host='.envv('DB_HOST','127.0.0.1').';port='.envv('DB_PORT','3306').';charset=utf8mb4';
$pdo=new PDO($dsn,(string)envv('DB_USERNAME','root'),(string)envv('DB_PASSWORD',''),[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
$pdo->exec($sql);
$database=preg_replace('/[^a-zA-Z0-9_]/','',(string)envv('DB_DATABASE','jqvhoioj_calendly'));
$hash=password_hash((string)envv('ADMIN_PASSWORD','ChangeMeNow123!'),PASSWORD_DEFAULT);
$q=$pdo->prepare("INSERT INTO `{$database}`.admins(email,password_hash) VALUES(?,?) ON DUPLICATE KEY UPDATE password_hash=VALUES(password_hash)");
$q->execute([strtolower((string)envv('ADMIN_EMAIL')),$hash]);
echo "Instalación completada. Cambie ADMIN_PASSWORD después del primer acceso.\n";
