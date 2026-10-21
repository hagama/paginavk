# Alumni: conexión con Conekta y VK

El formulario consulta por cédula `outp.identificacion` en la base de Conekta. Relaciona `outp.id` con `sesiones.id` para recuperar los campos de reubicación. Las respuestas nuevas se guardan únicamente en `alumni_responses` de la base de VK; no se actualizan `outp` ni `sesiones`.

## Puesta en marcha

1. En el servidor PHP que aloja `/even/alumni/`, configura `CONEKTA_DB_HOST`, `CONEKTA_DB_PORT`, `CONEKTA_DB_DATABASE`, `CONEKTA_DB_USERNAME`, `CONEKTA_DB_PASSWORD` y los equivalentes `VK_DB_*` en `even/.env`. No publiques ese archivo. El nombre del sitio `vk.redgam.com` no implica necesariamente que sea el host de MySQL; usa el host que indique el proveedor (puede ser `localhost` si PHP y MySQL están en el mismo servidor).
2. Ejecuta [alumni_responses.sql](alumni_responses.sql) una vez **solo en la base de VK**. El usuario `CONEKTA_DB_USERNAME` necesita SELECT sobre `outp` y `sesiones`. El usuario `VK_DB_USERNAME` necesita SELECT, INSERT y UPDATE sobre `alumni_responses`.
3. Publica `index.html`, `api.php`, `assets/js/alumni.js` y los demás archivos del directorio Alumni, junto con el `bootstrap.php` del proyecto `even`.
4. Verifica con una cédula de prueba real: consulta, precarga, guarda y vuelve a consultar. La cédula `123` ya no es un acceso de demostración; solo funcionará si existe en Conekta.

La consulta por cédula muestra datos personales a quien conozca ese número. Antes de abrir el formulario al público, conviene añadir una verificación de identidad adicional (por ejemplo, un código enviado al correo ya registrado) y una política de tratamiento de datos.
