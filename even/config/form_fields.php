<?php
return [
 'title'=>'Inteligencia Artificial (IA) para la búsqueda de empleo','public_id'=>'1FAIpQLSd4Fvgp9kpQpKWhwdfv_kK5UKsTJTC5Rpikkb9PNdZlZiJARw','description'=>'Conversación internacional sobre productividad, liderazgo y desarrollo del talento.',
 'fields'=>[
  ['item_id'=>'1275419724','entry_id'=>'877086558','name'=>'first_name','label'=>'Nombre(s)','type'=>'text','required'=>true],
  ['item_id'=>'365944224','entry_id'=>'168958564','name'=>'last_name','label'=>'Apellidos','type'=>'text','required'=>true],
  ['item_id'=>'2091318262','entry_id'=>'2104392545','name'=>'email','label'=>'Correo electrónico','type'=>'email','required'=>true],
  ['item_id'=>'905896922','entry_id'=>'1498135098','name'=>'phone','label'=>'Celular','type'=>'tel','required'=>true,'validation'=>['min_length'=>9]],
  ['item_id'=>'1416821469','entry_id'=>'97535610','name'=>'country','label'=>'País de residencia','type'=>'text','required'=>true,'validation'=>['max_length'=>100]],
  ['item_id'=>'1894314653','entry_id'=>'1091024986','name'=>'profession','label'=>'Profesión','type'=>'text','required'=>true,'validation'=>['max_length'=>100]],
  ['item_id'=>'682840563','entry_id'=>'1122237005','name'=>'employed','label'=>'¿Es empleado actualmente?','type'=>'radio','required'=>false,'options'=>['Si','No']],
  ['item_id'=>'594883789','entry_id'=>'361944052','name'=>'position','label'=>'Cargo actual','type'=>'text','required'=>true],
  ['item_id'=>'2075147711','entry_id'=>'1161327813','name'=>'company','label'=>'Empresa','type'=>'text','required'=>true],
  ['item_id'=>'579152699','entry_id'=>'429015824','name'=>'source','label'=>'¿Cómo te enteraste de este panel?','type'=>'radio','required'=>false,'options'=>['LinkedIn','Foro de Presidentes','Correo Electrónico','Invitación de WhatsApp','Referido','Holland House','Otro']],
  ['item_id'=>'1762145034','entry_id'=>'910637813','name'=>'data_consent','label'=>'Autorización para el tratamiento de datos personales','type'=>'radio','required'=>false,'options'=>['Sí','No']],
 ],'technical_fields'=>['timezone','selected_date','selected_start_utc']];
