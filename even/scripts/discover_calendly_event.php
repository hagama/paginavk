<?php
require dirname(__DIR__).'/bootstrap.php';
use App\Services\CalendlyService;

$c=new CalendlyService; $org='';
try { // Ruta preferida cuando el token tiene users:read.
    $me=$c->request('GET','/users/me');
    $user=$me['resource']['uri']; $org=$me['resource']['current_organization']??'';
} catch (RuntimeException $e) {
    // Los PAT de Programación no incluyen users:read. Calendly incluye user_uuid
    // como claim del token, que permite consultar event_types sin exponer el secreto.
    $token=(string)envv('CALENDLY_ACCESS_TOKEN'); $parts=explode('.',$token);
    $payload=json_decode(base64_decode(strtr($parts[1]??'','-_','+/')),true) ?: [];
    if (empty($payload['user_uuid'])) throw $e;
    $user='https://api.calendly.com/users/'.$payload['user_uuid'];
}
$events=['collection'=>[]]; $page='/event_types'; $query=['user'=>$user,'active'=>'true','count'=>100];
// Calendly pagina los tipos de evento; gh_pe puede estar fuera de la primera página.
do {
    $batch=$c->request('GET',$page,$query);
    $events['collection']=array_merge($events['collection'],$batch['collection']??[]);
    $page=$batch['pagination']['next_page']??null; $query=[];
} while ($page);
$wanted=rtrim((string)envv('CALENDLY_SCHEDULING_URL'),'/');
$found=array_values(array_filter($events['collection']??[],fn($e)=>rtrim($e['scheduling_url']??'','/')===$wanted));
echo json_encode(['user_uri'=>$user,'organization_uri'=>$org,'event_type'=>$found[0]??null],JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES).PHP_EOL;
if(!$found){fwrite(STDERR,"No se encontró el scheduling_url configurado.\n");exit(1);}
