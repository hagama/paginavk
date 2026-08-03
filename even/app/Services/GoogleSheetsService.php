<?php
namespace App\Services;
use Google\Client; use Google\Service\Sheets; use Google\Service\Sheets\ValueRange;
class GoogleSheetsService { private Sheets $api; private string $id; private string $tab;
 public function __construct(){ $c=new Client(); $c->setAuthConfig((string)envv('GOOGLE_APPLICATION_CREDENTIALS')); $c->setScopes([Sheets::SPREADSHEETS]); $this->api=new Sheets($c); $this->id=(string)envv('GOOGLE_SHEETS_ID'); $this->tab=(string)envv('GOOGLE_SHEETS_TAB','Inscripciones'); }
 public function headers(): void { $h=['ID','Fecha inscripción','Nombre','Correo','Celular','Respuestas','Fecha evento','Hora evento','Zona horaria','Estado','UUID evento','UUID invitado','Cancelación','Reprogramación','Última actualización']; $this->api->spreadsheets_values->update($this->id,$this->tab.'!A1:O1',new ValueRange(['values'=>[$h]]),['valueInputOption'=>'RAW']); }
 public function append(array $r): void { $v=[[$r['uuid'],date('c'),$r['full_name'],$r['email'],$r['phone'],json_encode($r['answers'],JSON_UNESCAPED_UNICODE),substr($r['selected_start_local'],0,10),substr($r['selected_start_local'],11,5),$r['timezone'],$r['status'],$r['calendly_event_uuid']??'',$r['calendly_invitee_uuid']??'',$r['cancel_url']??'',$r['reschedule_url']??'',date('c')]]; $this->api->spreadsheets_values->append($this->id,$this->tab.'!A:O',new ValueRange(['values'=>$v]),['valueInputOption'=>'RAW','insertDataOption'=>'INSERT_ROWS']); }
}
