<?php
namespace App\Services;
use RuntimeException;
class CalendlyService {
 private string $token; private string $base='https://api.calendly.com';
 public function __construct(){ $this->token=(string)envv('CALENDLY_ACCESS_TOKEN',''); if(!$this->token) throw new RuntimeException('CALENDLY_ACCESS_TOKEN no está configurado.'); }
 public function request(string $method,string $path,array $query=[],?array $body=null): array { $url=str_starts_with($path,'http')?$path:$this->base.$path; if($query)$url.='?'.http_build_query($query); $ch=curl_init($url); curl_setopt_array($ch,[CURLOPT_RETURNTRANSFER=>true,CURLOPT_CUSTOMREQUEST=>$method,CURLOPT_HTTPHEADER=>['Authorization: Bearer '.$this->token,'Content-Type: application/json'],CURLOPT_TIMEOUT=>25]); if($body!==null)curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($body)); $raw=curl_exec($ch); $code=(int)curl_getinfo($ch,CURLINFO_HTTP_CODE); $error=curl_error($ch); curl_close($ch); $data=json_decode((string)$raw,true)?:[]; if($error||$code<200||$code>=300) throw new RuntimeException($data['message']??$error?:'Calendly HTTP '.$code,$code); return $data; }
 public function availability(string $from,string $to): array { $uri=(string)envv('CALENDLY_EVENT_TYPE_URI',''); if(!$uri)throw new RuntimeException('Ejecute scripts/discover_calendly_event.php primero.'); return $this->request('GET','/event_type_available_times',['event_type'=>$uri,'start_time'=>$from,'end_time'=>$to]); }
 public function createInvitee(string $name,string $email,string $timezone,string $start): array { return $this->request('POST','/invitees',[],['event_type'=>envv('CALENDLY_EVENT_TYPE_URI'),'start_time'=>$start,'invitee'=>['name'=>$name,'email'=>$email,'timezone'=>$timezone]]); }
}
