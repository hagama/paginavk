<?php
require dirname(__DIR__,3).'/bootstrap.php';
$raw=file_get_contents('php://input');$sig=$_SERVER['HTTP_CALENDLY_WEBHOOK_SIGNATURE']??'';$key=(string)envv('CALENDLY_WEBHOOK_SIGNING_KEY','');
if($key&&$sig&&!hash_equals(hash_hmac('sha256',$raw,$key),preg_replace('/^v1=/','',$sig))){http_response_code(401);exit;}
$p=json_decode($raw,true)?:[];$type=$p['event']??'';$payload=$p['payload']??[];$uri=$payload['uri']??'';$eventKey=$p['created_at']??''.'|'.$type.'|'.$uri;
try{$pdo=db();$q=$pdo->prepare('INSERT INTO webhook_events(event_key,event_type,payload_json) VALUES(?,?,?)');$q->execute([hash('sha256',$eventKey),$type,$raw]);$status=$type==='invitee.canceled'?'canceled':'scheduled';$old=$payload['old_invitee']??null;if($type==='invitee.created'&&$old)$status='rescheduled';$u=$pdo->prepare('UPDATE registrations SET status=? WHERE calendly_invitee_uri=? OR calendly_invitee_uuid=?');$u->execute([$status,$uri,basename($uri)]);}catch(PDOException $e){if($e->getCode()!=='23000'){http_response_code(500);exit;}}http_response_code(200);echo 'ok';
