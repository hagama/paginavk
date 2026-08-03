<?php
declare(strict_types=1);

require dirname(__DIR__) . '/bootstrap.php';

if (empty($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}

$pdo = db();
$pdo->exec("CREATE TABLE IF NOT EXISTS app_settings (setting_key VARCHAR(100) PRIMARY KEY, setting_value TEXT NOT NULL, updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)");
$form = require dirname(__DIR__) . '/config/form_fields.php';
$defaultTitle = (string) $form['title'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!hash_equals(csrf(), (string) ($_POST['csrf'] ?? ''))) {
        http_response_code(419);
        exit('La sesión expiró. Recarga la página.');
    }

    $action = (string) ($_POST['action'] ?? '');
    if ($action === 'update_title') {
        $newTitle = trim((string) ($_POST['form_title'] ?? ''));
        $titleLength = function_exists('mb_strlen') ? mb_strlen($newTitle) : strlen($newTitle);
        if ($newTitle === '' || $titleLength > 180) {
            $_SESSION['admin_flash'] = ['error', 'El nombre debe tener entre 1 y 180 caracteres.'];
        } else {
            $q = $pdo->prepare('INSERT INTO app_settings(setting_key,setting_value) VALUES(?,?) ON DUPLICATE KEY UPDATE setting_value=VALUES(setting_value)');
            $q->execute(['form_title', $newTitle]);
            $_SESSION['admin_flash'] = ['success', 'Nombre del formulario actualizado.'];
        }
    } elseif ($action === 'clear_registrations') {
        if (($_POST['confirm_clear'] ?? '') !== '1') {
            $_SESSION['admin_flash'] = ['error', 'Debes confirmar que deseas eliminar todos los inscritos.'];
        } else {
            $pdo->beginTransaction();
            try {
                $pdo->exec('DELETE FROM integration_logs');
                $pdo->exec('DELETE FROM webhook_events');
                $deleted = $pdo->exec('DELETE FROM registrations');
                $pdo->commit();
                $_SESSION['admin_flash'] = ['success', 'Base de inscritos limpiada. Registros eliminados: ' . (int) $deleted . '.'];
            } catch (Throwable $e) {
                if ($pdo->inTransaction()) {
                    $pdo->rollBack();
                }
                $_SESSION['admin_flash'] = ['error', 'No fue posible limpiar la base de datos.'];
            }
        }
    }

    header('Location: inscritos.php');
    exit;
}

$title = (string) app_setting('form_title', $defaultTitle);
$rows = $pdo->query('SELECT * FROM registrations ORDER BY id DESC')->fetchAll();
$flash = $_SESSION['admin_flash'] ?? null;
unset($_SESSION['admin_flash']);

$escape = static fn(mixed $value): string => htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$answersFor = static function (array $row): array {
    $answers = json_decode((string) ($row['form_response_json'] ?? ''), true);
    return is_array($answers) ? $answers : [];
};
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informes de inscritos</title>
    <link rel="stylesheet" href="../public/assets/css/app.css?v=20260803-4">
    <style>
        .reports{max-width:1500px}.admin-nav{display:flex;gap:16px;flex-wrap:wrap;margin-bottom:22px}.admin-nav a{color:#044f8c;font-weight:700}.panel{background:#fff;padding:24px;border-radius:14px;box-shadow:0 10px 30px #044f8c12;margin-bottom:24px}.panel h2{margin-top:0}.settings-form{display:grid;grid-template-columns:minmax(0,1fr) auto;gap:12px;align-items:end}.settings-form button,.danger button{margin:0}.flash{padding:14px 18px;border-radius:10px;margin-bottom:20px}.flash.success{background:#e8f5ec;color:#17652f}.flash.error{background:#fff0f0;color:#a01919}.summary{font-size:18px;color:#044f8c}.table-wrap{width:100%;overflow:auto;border:1px solid #d9e3ef;border-radius:12px}table{width:100%;min-width:1500px;border-collapse:collapse;background:#fff}th,td{padding:11px 12px;border-bottom:1px solid #e5ebf2;text-align:left;vertical-align:top;font-size:13px;white-space:nowrap}th{position:sticky;top:0;background:#044f8c;color:#fff;z-index:1}tbody tr:nth-child(even){background:#f8f8f8}.empty{padding:36px;text-align:center;color:#555}.danger{border:1px solid #e1251b}.danger button{background:#e1251b}.danger button:hover{background:#c90000}.confirm{display:flex;align-items:flex-start;gap:10px;margin:16px 0}.confirm input{width:auto;min-height:auto;margin-top:3px}@media(max-width:700px){.reports{padding:0 12px}.panel{padding:18px}.settings-form{grid-template-columns:1fr}.settings-form button{width:100%}}
    </style>
</head>
<body>
<main class="reports">
    <nav class="admin-nav" aria-label="Administración"><a href="index.php">Resumen</a><a href="inscritos.php" aria-current="page">Informes de inscritos</a><a href="../public/index.php" target="_blank" rel="noopener">Ver formulario</a></nav>
    <h1>Informes de inscritos</h1>

    <?php if ($flash): ?><div class="flash <?=$escape($flash[0])?>" role="status"><?=$escape($flash[1])?></div><?php endif; ?>

    <section class="panel">
        <h2>Nombre del formulario</h2>
        <form method="post" class="settings-form">
            <input type="hidden" name="csrf" value="<?=$escape(csrf())?>">
            <input type="hidden" name="action" value="update_title">
            <label>Nombre visible y usado al compartir
                <input type="text" name="form_title" value="<?=$escape($title)?>" maxlength="180" required>
            </label>
            <button type="submit">Guardar nombre</button>
        </form>
    </section>

    <section class="panel">
        <h2>Inscritos</h2>
        <p class="summary"><strong><?=count($rows)?></strong> registros encontrados</p>
        <div class="table-wrap" tabindex="0" aria-label="Tabla desplazable de inscritos">
            <?php if (!$rows): ?>
                <p class="empty">Todavía no hay personas inscritas.</p>
            <?php else: ?>
                <table>
                    <thead><tr><th>ID</th><?php foreach ($form['fields'] as $field): ?><th><?=$escape($field['label'])?></th><?php endforeach; ?><th>Fecha del evento</th><th>Estado</th><th>Fecha de registro</th></tr></thead>
                    <tbody>
                    <?php foreach ($rows as $row): $answers = $answersFor($row); ?>
                        <tr><td><?=$escape($row['id'])?></td><?php foreach ($form['fields'] as $field): ?><td><?=$escape($answers[$field['name']] ?? match ($field['name']) {'email' => $row['email'] ?? '', 'phone' => $row['phone'] ?? '', default => ''})?></td><?php endforeach; ?><td><?=$escape($row['selected_start_local'])?></td><td><?=$escape($row['status'])?></td><td><?=$escape($row['created_at'])?></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </section>

    <section class="panel danger">
        <h2>Limpiar base de inscritos</h2>
        <p>Esta acción elimina todos los inscritos y sus registros de integración. El nombre del formulario y los administradores se conservan.</p>
        <form method="post" onsubmit="return confirm('Esta acción eliminará definitivamente todos los inscritos. ¿Deseas continuar?')">
            <input type="hidden" name="csrf" value="<?=$escape(csrf())?>">
            <input type="hidden" name="action" value="clear_registrations">
            <label class="confirm"><input type="checkbox" name="confirm_clear" value="1" required><span>Confirmo que deseo eliminar todos los inscritos.</span></label>
            <button type="submit">Limpiar base de datos</button>
        </form>
    </section>
</main>
</body>
</html>
