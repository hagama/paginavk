# Calendl — Vásquez Kennedy

Aplicación PHP/MySQL para reproducir el formulario real, mostrar disponibilidad de Calendly y crear la reserva sin abrir ni incrustar Calendly.

## Arquitectura y flujo

El navegador solo habla con endpoints PHP. `availability.php` obtiene horarios mediante Calendly API v2; `register.php` valida CSRF/datos, crea un registro idempotente, vuelve a verificar el horario, reserva en Calendly y confirma MySQL. Sheets y correo se ejecutan después: si fallan, la cita permanece agendada y puede sincronizarse con el script de reintento. El webhook reconcilia cancelaciones y reprogramaciones.

Mapeo: nombre/apellidos → `full_name` y nombre del invitado; correo → MySQL/Sheets/Calendly; celular y las demás 8 respuestas → JSON y Sheets; fecha UTC/zona → Calendly y fechas local/UTC en MySQL. Los IDs reales están en `config/form_fields.php`.

## Instalación XAMPP

1. La máquina actual tiene PHP 8.0.30. El código es compatible, pero producción debe actualizarse a PHP 8.2+ como exige el proyecto.
2. Copie `.env.example` a `.env`, cambie `APP_KEY`, contraseña administrativa y credenciales.
3. Ejecute `composer install`, luego `php install.php` con Apache/MySQL iniciados.
4. Abra `http://localhost/calendl/public/` y el panel en `/calendl/admin/`.

## Calendly

Cree un token personal desde Integraciones/API de Calendly y póngalo en `CALENDLY_ACCESS_TOKEN`. Ejecute `php scripts/discover_calendly_event.php`; copie los URI de usuario, organización y evento mostrados al `.env`. La cuenta/plan debe permitir API v2, creación de invitaciones y webhooks. Registre el webhook público HTTPS apuntando a `/public/api/webhooks/calendly.php` y configure su clave de firma. El enlace público nunca se usa como API.

## Google Cloud

Habilite Google Forms API y Google Sheets API. Cree una cuenta de servicio, descargue el JSON fuera de la carpeta pública, comparta la hoja con el email de esa cuenta y configure ruta, ID de hoja y pestaña en `.env`. Ejecute `php scripts/create_sheets_headers.php`. La Forms API requiere el ID interno y permisos del propietario; el ID publicado no basta. Por eso se incluyó el mapeo descubierto desde la publicación y puede reemplazarse de forma segura en `config/form_fields.php`.

## Operación

- Reintentar Sheets: `php scripts/retry_google_sheets.php` (idealmente por cron cada 5 minutos).
- Prueba básica: `php tests/smoke.php`.
- Los errores 409 devuelven el formulario conservado para elegir otro horario; 401/403 suelen indicar token o permisos; 422 indica payload/evento incompatible; 429 exige esperar; 5xx es temporal y no debe recrearse una reserva cuyo resultado sea incierto.
- Calendly envía su propia invitación; la app agrega un ICS de respaldo, no crea otro evento de Google Calendar.

## Requisitos pendientes de cuentas

Se necesitan token Calendly con el tipo `gh_pe` visible, credenciales Google con acceso al formulario/hoja, SMTP y un dominio HTTPS público para webhooks. Sin ellos no es posible descubrir el URI privado ni ejecutar reservas reales. El formulario público detectado contiene 11 preguntas; fecha, hora y zona horaria son campos técnicos adicionales.

## Seguridad

PDO preparado, CSRF, sesiones HTTP-only/SameSite, rate limit, escape HTML, credenciales en `.env`, token solo backend, firma de webhook, deduplicación de webhooks y contraseña con `password_hash`. En producción use HTTPS, `APP_ENV=production` y mantenga `.env`/credenciales fuera del document root.
