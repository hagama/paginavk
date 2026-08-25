<?php
require dirname(__DIR__).'/bootstrap.php';
$confirmationPhrase=(string)app_setting('confirmation_phrase','Convierte la IA en tu sistema completo de búsqueda de empleo.');
$requested=(string)($_GET['uuid']??'');
$q=db()->prepare("SELECT * FROM registrations WHERE uuid=? OR ? LIKE CONCAT(uuid, '%') ORDER BY CHAR_LENGTH(uuid) DESC LIMIT 1");
$q->execute([$requested,$requested]);
$r=$q->fetch();
if(!$r||!in_array($r['status'],['scheduled','pending'],true)){http_response_code(404);exit('Inscripción no encontrada.');}
$calendlyConfirmed=$r['status']==='scheduled';
?><!doctype html><html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width"><link rel="stylesheet" href="assets/css/app.css"><title>Inscripción confirmada</title></head><body><main><section class="hero"><p class="eyebrow">INSCRIPCIÓN CONFIRMADA</p><h1>¡Gracias, <?=htmlspecialchars($r['full_name'])?>!</h1><p><?php if($calendlyConfirmed):?>Calendly confirmó tu reserva y enviará la invitación a <?=htmlspecialchars(mask($r['email']))?>.<?php else:?>Tus datos fueron registrados correctamente. Recibirás la información del evento en <?=htmlspecialchars(mask($r['email']))?>.<?php endif?></p></section><form><h2><?=htmlspecialchars(date('d/m/Y g:i a',strtotime($r['selected_start_local'])))?></h2><p>Zona horaria: <strong><?=htmlspecialchars($r['timezone'])?></strong></p><p class="confirmation-message"><?=htmlspecialchars($confirmationPhrase)?></p></form></main></body></html>
