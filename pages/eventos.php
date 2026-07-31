<?php
require_once dirname(__DIR__) . '/cache-control.php';

date_default_timezone_set('America/Bogota');

$mesesEventos = [
    1 => 'enero',
    2 => 'febrero',
    3 => 'marzo',
    4 => 'abril',
    5 => 'mayo',
    6 => 'junio',
    7 => 'julio',
    8 => 'agosto',
    9 => 'septiembre',
    10 => 'octubre',
    11 => 'noviembre',
    12 => 'diciembre',
];

function rangoEventosAgora(): array
{
    $hoy = new DateTime('today');
    $diaActual = (int) $hoy->format('j');
    $finRango = new DateTime('first day of next month');

    if ($diaActual >= 28) {
        $finRango->modify('first day of next month');
    }

    return [
        $hoy->format('Y-m-d'),
        $finRango->format('Y-m-d'),
    ];
}

function cargarConexionEventos(): ?mysqli
{
    if (isset($GLOBALS['lms']) && $GLOBALS['lms'] instanceof mysqli) {
        return $GLOBALS['lms'];
    }

    $candidatos = [
        dirname(__DIR__, 5) . '/edu/server/conection.php',
        dirname(__DIR__, 2) . '/server/conection.php',
        ($_SERVER['DOCUMENT_ROOT'] ?? '') . '/../server/conection.php',
        ($_SERVER['DOCUMENT_ROOT'] ?? '') . '/server/conection.php',
    ];

    foreach ($candidatos as $rutaConexion) {
        if ($rutaConexion && is_file($rutaConexion)) {
            include_once $rutaConexion;

            if (isset($GLOBALS['lms']) && $GLOBALS['lms'] instanceof mysqli) {
                return $GLOBALS['lms'];
            }
        }
    }

    return null;
}

function limpiarEventoTexto(?string $texto): string
{
    $texto = html_entity_decode((string) $texto, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $texto = preg_replace('#<(br|/p|/div|/li)\b[^>]*>#i', "\n", $texto);
    $texto = preg_replace('#<li\b[^>]*>#i', "\n", $texto);
    $texto = strip_tags((string) $texto);
    $texto = str_replace("\xc2\xa0", ' ', $texto);
    $texto = preg_replace("/[ \t]+/", ' ', $texto);
    $texto = preg_replace("/\n{3,}/", "\n\n", $texto);

    return trim((string) $texto);
}

function horaEvento(array $evento): string
{
    if (!empty($evento['hora'])) {
        $hora = DateTime::createFromFormat('H:i:s', $evento['hora'])
            ?: DateTime::createFromFormat('H:i', $evento['hora']);

        if ($hora) {
            $periodo = (int) $hora->format('H') >= 12 ? 'p. m.' : 'a. m.';
            return (int) $hora->format('g') . ':' . $hora->format('i') . ' ' . $periodo;
        }

        return (string) $evento['hora'];
    }

    return 'Horario por confirmar';
}

function fechaEventoCompleta(array $evento, array $meses): string
{
    $fecha = new DateTime($evento['fecha']);
    $mes = ucfirst($meses[(int) $fecha->format('n')]);

    return $fecha->format('d') . ' ' . $mes . ', ' . $fecha->format('Y') . ' - ' . horaEvento($evento);
}

function imagenEvento(array $evento): string
{
    $imagen = trim((string) ($evento['imagen'] ?? ''));

    if ($imagen === '') {
        return '../recursos-multimedia/eventos/cards-a-1.webp';
    }

    if (preg_match('#^https?://#i', $imagen)) {
        return $imagen;
    }

    if (strpos($imagen, '//') === 0) {
        return 'https:' . $imagen;
    }

    return 'https://conektavk.com/' . ltrim($imagen, '/');
}

function leerEventosDesdeUrl(string $url): ?array
{
    $contenido = false;

    if (ini_get('allow_url_fopen')) {
        $contexto = stream_context_create([
            'http' => [
                'timeout' => 2,
            ],
        ]);
        $contenido = @file_get_contents($url, false, $contexto);
    }

    if ($contenido === false && function_exists('curl_init')) {
        $curl = curl_init($url);
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 2,
            CURLOPT_TIMEOUT => 4,
        ]);
        $contenido = curl_exec($curl);
        curl_close($curl);
    }

    if ($contenido === false || $contenido === '') {
        return null;
    }

    $eventos = json_decode($contenido, true);

    return is_array($eventos) ? $eventos : null;
}

function cargarEventosAgoraDesdeEndpoint(string $inicioMes, string $finMes, string $eventoExcluido): array
{
    $eventos = [];
    $inicio = new DateTime($inicioMes);
    $fin = new DateTime($finMes);
    $fechasConEventos = [];

    for ($bloqueInicio = clone $inicio; $bloqueInicio < $fin; $bloqueInicio->modify('+7 days')) {
        $bloqueFin = (clone $bloqueInicio)->modify('+6 days');
        $ultimoDia = (clone $fin)->modify('-1 day');

        if ($bloqueFin > $ultimoDia) {
            $bloqueFin = $ultimoDia;
        }

        $urlSemana = 'https://conektavk.com/ecosistema/components/OP_PRIN!/get_week_events.php?start='
            . $bloqueInicio->format('Y-m-d') . '&end=' . $bloqueFin->format('Y-m-d');
        $eventosSemana = leerEventosDesdeUrl($urlSemana);

        if (!$eventosSemana) {
            continue;
        }

        foreach (array_keys($eventosSemana) as $fechaEvento) {
            $fechasConEventos[$fechaEvento] = true;
        }
    }

    if (empty($fechasConEventos)) {
        $proximos = leerEventosDesdeUrl('https://conektavk.com/ecosistema/components/OP_PRIN!/get_event.php?proximos=1') ?? [];

        foreach ($proximos as $evento) {
            $fechaEvento = $evento['fecha'] ?? '';

            if ($fechaEvento >= $inicioMes && $fechaEvento < $finMes) {
                $fechasConEventos[$fechaEvento] = true;
            }
        }
    }

    ksort($fechasConEventos);

    foreach (array_keys($fechasConEventos) as $fechaEvento) {
        $url = 'https://conektavk.com/ecosistema/components/OP_PRIN!/get_event.php?date=' . $fechaEvento;
        $eventosDia = leerEventosDesdeUrl($url);

        if (!$eventosDia) {
            continue;
        }

        foreach ($eventosDia as $evento) {
            if (($evento['nombre'] ?? '') === $eventoExcluido) {
                continue;
            }

            $eventos[] = $evento;
        }
    }

    usort($eventos, static function (array $a, array $b): int {
        return strcmp(($a['fecha'] ?? '') . ' ' . ($a['hora'] ?? ''), ($b['fecha'] ?? '') . ' ' . ($b['hora'] ?? ''));
    });

    return $eventos;
}

function cargarEventosAgora(): array
{
    [$inicioMes, $finMes] = rangoEventosAgora();
    $eventoExcluido = 'Comunidad Ejecutiva Global';
    $eventosEndpoint = cargarEventosAgoraDesdeEndpoint($inicioMes, $finMes, $eventoExcluido);

    if (!empty($eventosEndpoint)) {
        return $eventosEndpoint;
    }

    $lms = cargarConexionEventos();

    if (!$lms) {
        return [];
    }

    $stmt = $lms->prepare("SELECT nombre, fecha, detalle, tiempo, calendly, imagen, tipo, hora FROM eventos WHERE fecha >= ? AND fecha < ? AND nombre <> ? ORDER BY fecha ASC, hora ASC, nombre ASC");

    if (!$stmt) {
        return [];
    }

    $stmt->bind_param('sss', $inicioMes, $finMes, $eventoExcluido);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $eventos = $resultado ? $resultado->fetch_all(MYSQLI_ASSOC) : [];
    $stmt->close();

    return $eventos;
}

$eventosAgora = cargarEventosAgora();
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VK - Ágora Abierta</title>
<?php render_open_graph(); ?>
    <link rel="icon" type="image/x-icon" href="../recursos-multimedia/logos/icon-vasquez-kennedy.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Hojas de Estilos -->
    <link rel="stylesheet" href="<?= asset_url('../styles/global.css') ?>" />
    <link rel="stylesheet" href="<?= asset_url('../styles/eventos.css') ?>" />
    <!-- Fuente de texto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary pt-3 pb-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <img src="../recursos-multimedia/logos/logo-vasquez-kennedy.webp" alt="Logo Vásquez-Kennedy" width="120" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto column-gap-3">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../pages/quienes-somos.php">Quiénes Somos</a>
                </li>
		        <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle">Para Empresas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../pages/outplacement-empresas.php">Outplacement</a></li>
                                <li><a class="dropdown-item" href="../pages/desarrollo-carrera.php">Desarrollo de Carrera</a></li>
                                <li><a class="dropdown-item" href="../pages/gestion-desempeno.php">Gestión del Desempeño</a></li>
                                <li><a class="dropdown-item" href="../pages/experiencia-empleado.php">Experiencia del Empleado</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle">Para Personas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../pages/outplacement-personas.php">Outplacement</a></li>
                                <li><a class="dropdown-item" href="../pages/desarrollo-carrera-personas.php">Desarrollo de Carrera</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="https://wa.link/s3ece3">Contáctanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.youtube.com/watch?v=66y8sBR_La8">Banco de Talentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://conektavk.com/">Conekta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="../pages/eventos.php">Ágora Abierta</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    
    <section class="blogs-section">
        <div class="blogs-overlay"></div>
        <div class="container">
            <h2 class="blogs-title" style="margin-bottom: 0px;">
                Ágora abierta
            </h2>
            <h5 class="blogs-title">
                Blogs
            </h5>
            <p class="blogs-intro">
                El espacio donde compartimos ideas, conversaciones y recursos sobre carreras, liderazgo y productividad.
                Blogs, eventos, webinars y podcasts para que tu vida profesional crezca.
            </p>
            <div class="blogs-slider">
                <div class="blogs-track">
                    <!-- BLOG 1 -->
                    <article class="blog-card">
                        <a class="blog-card-link" href="../pages/blogs/blog1.php">
                        <div class="blog-content">
                            <h4>
                                “SEXALESCENTES”
                            </h4>
                            <span class="blog-date text-p4">
                                23 Mayo, 2026
                            </span>
                            <div class="blog-line"></div>
                            <p>
                                Se ha configurado una nueva generación: los “sexalescentes”, o sexagenarios
                                adolescentes. Antes eran ancianos de 60 o más años de edad que hoy no son viejos.
                            </p>
                            <span class="blog-more text-p5">+ info</span>
                        </div>
                        </a>
                    </article>

                    <!-- BLOG 2 -->
                    <article class="blog-card">
                        <a class="blog-card-link" href="../pages/blogs/blog2.php">
                        <div class="blog-content">
                            <h4>
                                EL NUEVO PODER DEL AUTODESARROLLO
                            </h4>
                            <span class="blog-date text-p4">
                                23 Mayo, 2026
                            </span>
                            <div class="blog-line"></div>
                            <p>
                                Nadie aprende si no quiere aprender. Todo el que sepa lo que quiere y conozca
                                sus recursos internos puede tener una carrera exitosa.
                            </p>
                            <span class="blog-more text-p5">+ info</span>
                        </div>
                        </a>
                    </article>

                    <!-- BLOG 3 -->
                    <article class="blog-card">
                        <a class="blog-card-link" href="../pages/blogs/blog3.php">
                        <div class="blog-content">
                            <h4>
                                CÓMO ES UNA “MARCA PERSONAL CONQUISTADORA”
                            </h4>
                            <span class="blog-date text-p4">
                                23 Mayo, 2026
                            </span>
                            <div class="blog-line"></div>
                            <p>
                                Ni imagen sin sustento, ni trabajo sin proyección de la imagen personal.
                                La marca personal comunica sus atributos reales, relevantes y distintivos.
                            </p>
                            <span class="blog-more text-p5">+ info</span>
                        </div>
                        </a>
                    </article>
                </div>
            </div>
            <div class="blogs-dots"></div>
        </div>
    </section>
    
    <section class="podcast-section">
        <div class="podcast-hero">
            <div class="podcast-overlay"></div>
            <div class="podcast-container">
                <div class="podcast-top">
                    <div class="podcast-info">
                        <h3>
                            Las ideas que transforman una carrera no siempre vienen de un libro.
                            A veces vienen de una conversación.
                        </h3>
                    </div>
                </div>

                <div class="podcast-carousel" aria-label="Episodios del podcast">
                    <article class="podcast-player-card">
                        <div class="podcast-content">
                            <div class="podcast-header">
                                <h4>Innovaciones en la gestión humana en Colombia</h4>
                                <p class="text-p4">Camilo Vásquez, socio fundador de Vásquez Kennedy, y Andrea Villamizar Giraldo, fundadora y gerente de GSO Grupo Soluciones Horizonte, nos comparten su visión sobre los cambios estratégicos en la gestión del talento humano en el país. Desde la digitalización hasta el enfoque en People Analytics, descubren cómo estas transformaciones están marcando el camino para las empresas de hoy.</p>
                            </div>
                            <div class="spotify-player">
                                <iframe
                                    style="border-radius:12px"
                                    src="https://open.spotify.com/embed/episode/50paq06ubwgz07o27atRo5?utm_source=generator&theme=0"
                                    width="100%"
                                    height="152"
                                    frameBorder="0"
                                    allowfullscreen=""
                                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </article>

                    <article class="podcast-player-card">
                        <div class="podcast-content">
                            <div class="podcast-header">
                                <h4>Decisiones de carrera: si tu trabajo puede hacerte más feliz</h4>
                                <p class="text-p4">En este episodio, Camilo Vásquez, socio fundador de Vásquez Kennedy, se une a Gabriela Barriga, gerente general de PELPAK, para una conversación reveladora sobre cómo tomar decisiones de carrera que verdaderamente importan. Explorarán cómo enfrentar miedos, superar barreras y construir un camino profesional que esté alineado con tus pasiones y objetivos personales. A través de sus experiencias y conocimientos, Camilo y Gabriela te invitan a reflexionar sobre lo que significa "Decisiones de carrera: si tu trabajo puede hacerte más feliz". No te pierdas esta charla que podría ser el primer paso para transformar tu vida profesional.</p>
                            </div>
                            <div class="spotify-player">
                                <iframe
                                    style="border-radius:12px"
                                    src="https://open.spotify.com/embed/episode/4W5YCPEApI8g2NilhdPK8Y?utm_source=generator&theme=0"
                                    width="100%"
                                    height="152"
                                    frameBorder="0"
                                    allowfullscreen=""
                                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </article>

                    <article class="podcast-player-card">
                        <div class="podcast-content">
                            <div class="podcast-header">
                                <h4>Entrevista sobre Experiencia del Usuario</h4>
                                <p class="text-p4">Gabriel Santos es uno de los mayores expertos en Experiencia del Empleado en el país. Al oírlo se comprende bien por qué la Experiencia del Empleado es un pilar esencial en la gestión del talento humano.</p>
                            </div>
                            <div class="spotify-player">
                                <iframe
                                    style="border-radius:12px"
                                    src="https://open.spotify.com/embed/episode/47JU8QWcx7M92ZrGKxIy4s?utm_source=generator&theme=0"
                                    width="100%"
                                    height="152"
                                    frameBorder="0"
                                    scrolling="no"
                                    allowfullscreen=""
                                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </article>

                    <article class="podcast-player-card">
                        <div class="podcast-content">
                            <div class="podcast-header">
                                <h4>Marca Personal Conquistadora</h4>
                                <p class="text-p4">El fin último de su marca personal es que usted se convierta en la opción preferente en un proceso de selección de un ejecutivo, de un aliado, de un socio o de un proveedor y se ponga de primero en la fila. La imagen es demasiado importante como para dejarla suelta.</p>
                            </div>
                            <div class="spotify-player">
                                <iframe
                                    style="border-radius:12px"
                                    src="https://open.spotify.com/embed/episode/3ihiog9yGDwbrOCOvNel6w?utm_source=generator&theme=0"
                                    width="100%"
                                    height="152"
                                    frameBorder="0"
                                    allowfullscreen=""
                                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </article>

                    <article class="podcast-player-card">
                        <div class="podcast-content">
                            <div class="podcast-header">
                                <h4>La consultoría empresarial: "Un oficio que se aprende"</h4>
                                <p class="text-p4">En este episodio, Camilo Vásquez socio y fundador de Vásquez Kennedy, entrevista a Jorge Enrique Morales, experto en estrategia con más de 30 años de experiencia, sobre lo que se necesita para ser un buen consultor. Exploran quién puede convertirse en consultor, las habilidades clave que son imprescindibles y los errores que deben evitarse, como la arrogancia. Jorge comparte su visión sobre cómo los consultores ayudan a las empresas a enfrentar retos sin necesidad de contratar talento gerencial a tiempo completo.</p>
                            </div>
                            <div class="spotify-player">
                                <iframe
                                    style="border-radius:12px"
                                    src="https://open.spotify.com/embed/episode/2xYZIByyim4QejHnFa7bO2?utm_source=generator&theme=0"
                                    width="100%"
                                    height="152"
                                    frameBorder="0"
                                    allowfullscreen=""
                                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                    loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <div class="podcast-hero-2"> </div>
    </section>

    <section class="eventos-section">
        <div class="eventos-overlay"></div>
        <div class="container">
            <h4 class="eventos-title">Esto es lo que viven cada semana quienes hacen parte de la Comunidad VK.<br>Las Salas de Intercambio son espacios de aprendizaje continuo, exclusivos para nuestros usuarios.</h4>
            <div class="eventos-slider">
                <div class="eventos-track">
                    <?php if (empty($eventosAgora)): ?>
                        <article class="evento-card evento-card-vacio">
                            <div class="evento-content evento-content-vacio">
                                <h3>No hay eventos disponibles</h3>
                                <span class="evento-date text-p4">Pronto publicaremos nuevas fechas.</span>
                                <div class="evento-line"></div>
                                <p>Vuelve a consultar esta seccion para conocer los proximos espacios de Ágora Abierta.</p>
                            </div>
                        </article>
                    <?php endif; ?>

                    <?php foreach ($eventosAgora as $evento): ?>
                        <?php
                            $fechaEvento = new DateTime($evento['fecha']);
                            $detalleEvento = limpiarEventoTexto($evento['detalle'] ?? '');
                            $calendlyEvento = trim((string) ($evento['calendly'] ?? ''));
                        ?>
                        <article class="evento-card">
                            <img src="<?= htmlspecialchars(imagenEvento($evento), ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars('Evento ' . ($evento['nombre'] ?? 'Vasquez Kennedy'), ENT_QUOTES, 'UTF-8') ?>" class="evento-img">
                            <div class="evento-info">
                                <div class="evento-fecha">
                                    <span class="dia text-p1"><b><?= htmlspecialchars($fechaEvento->format('d'), ENT_QUOTES, 'UTF-8') ?></b></span>
                                    <span class="dia text-p5"><b><?= htmlspecialchars(ucfirst(substr($mesesEventos[(int) $fechaEvento->format('n')], 0, 3)), ENT_QUOTES, 'UTF-8') ?></b></span>
                                </div>

                                <div class="evento-content">
                                    <h3><?= htmlspecialchars($evento['nombre'], ENT_QUOTES, 'UTF-8') ?></h3>
                                    <span class="evento-date text-p4">
                                        <?= htmlspecialchars(fechaEventoCompleta($evento, $mesesEventos), ENT_QUOTES, 'UTF-8') ?>
                                    </span>
                                    <div class="evento-line"></div>
                                    <?php if ($detalleEvento !== ''): ?>
                                        <p><?= htmlspecialchars($detalleEvento, ENT_QUOTES, 'UTF-8') ?></p>
                                    <?php endif; ?>
                                    <?php if ($calendlyEvento !== ''): ?>
                                       
                                    <?php else: ?>
                                        <span class="evento-inscripcion evento-inscripcion-disabled text-p5"><b>Inscripcion proximamente</b></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>

                    <?php if (false): ?>
                    <!-- Evento 1 -->
                    <article class="evento-card">
                        <img src="../recursos-multimedia/eventos/cards-a-1.webp" alt="Evento organizado por Vásquez Kennedy" class="evento-img">
                        <div class="evento-info">
                            <div class="evento-fecha">
                                <span class="dia text-p1"><b>23</b></span>
                                <span class="dia text-p5"><b>Mayo</b></span>
                            </div>

                            <div class="evento-content">
                                <h3>Título de evento</h3>
                                <span class="evento-date text-p4">
                                    23 Mayo, 2026
                                </span>
                                <div class="evento-line"></div>
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit,
                                    sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </article>
                    <!-- Evento 2 -->
                    <article class="evento-card">
                        <img src="../recursos-multimedia/eventos/cards-a-2.webp" alt="Evento organizado por Vásquez Kennedy" class="evento-img">
                        <div class="evento-info">
                            <div class="evento-fecha">
                                <span class="dia text-p1"><b>23</b></span>
                                <span class="dia text-p5"><b>Mayo</b></span>
                            </div>

                            <div class="evento-content">
                                <h3>Título de evento</h3>
                                <span class="evento-date text-p4">
                                    23 Mayo, 2026
                                </span>
                                <div class="evento-line"></div>
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit,
                                    sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- Evento 3 -->
                    <article class="evento-card">
                        <img src="../recursos-multimedia/eventos/cards-a-2.webp" alt="Evento organizado por Vásquez Kennedy" class="evento-img">
                        <div class="evento-info">
                            <div class="evento-fecha">
                                <span class="dia text-p1"><b>23</b></span>
                                <span class="dia text-p5"><b>Mayo</b></span>
                            </div>

                            <div class="evento-content">
                                <h3>Título de evento</h3>
                                <span class="evento-date text-p4">
                                    23 Mayo, 2026
                                </span>
                                <div class="evento-line"></div>
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit,
                                    sed do eiusmod tempor.
                                </p>
                            </div>
                        </div>
                    </article>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Puntos para pasar tarjetas -->
            <div class="eventos-dots"></div>
        </div>
    </section>

    <section class="webinars-section">
        <div class="webinars-overlay"></div>
        <div class="container">
            <h2 class="webinars-title">
                Webinars
            </h2>
            <div class="webinars-content">
                <div class="webinar-video">
                    <iframe 
                        src="https://www.youtube-nocookie.com/embed/Rysv5GMm4sM"
                        title="Webinar"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>

                <div class="webinar-info text-p3">
                    <h3>Panel Internacional: "Gestiòn Humana y productividad empresarial"</h3>
                    <p>Las principales barreras para productividad de nuestras empresas no son externas a ellas sino internas: la micro gerencia, el castigo al error, las reuniones ineficientes, el premio al trabajo en jornadas largas vs a los resultados, la conexión 7x24, la poca delegación, la falta de confianza en las personas y otros. Mejorar la productividad es esencial para los empleados, las empresas y los gobiernos.  Ell área de Recursos Humanos es el motor principal, como quedó demostrado en el panel internacional “Gestión humana y productividad empresarial” que realizó Vásquez Kennedy en julio de 2026, en el que participaron expertos de alto nivel de España, Portugal, Brasil y Colombia.

                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="networking-section">
        <div class="container">
            <!-- TITULO -->
            <h3 class="networking-title">
                Eventos <i>networking</i>
            </h3>
            <p class="networking-intro text-p3">
                Espacios presenciales donde nuestros usuarios en transición de carrera se conectan directamente con líderes de gestión humana y headhunters. El 80% de las oportunidades laborales nunca se publican, se encuentran en las conversaciones correctas.
            </p>

            <div class="networking-wrapper">
                <!-- VIDEO -->
                <div class="networking-video">
                    <iframe 
                        src="https://www.youtube-nocookie.com/embed/sAvssxGKL1w"
                        title="Eventos networking"
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- GALERIA -->
                <div class="networking-gallery">
                    <div class="gallery-item horizontal gallery-item-new" data-index="0" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="../recursos-multimedia/eventos/galeria/networking-1.jpeg" alt="Evento networking Vasquez Kennedy">
                    </div>
                    <div class="gallery-item vertical gallery-item-new" data-index="1" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="../recursos-multimedia/eventos/galeria/networking-2.jpeg" alt="Evento networking Vasquez Kennedy">
                    </div>
                    <div class="gallery-item vertical gallery-item-new" data-index="2" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="../recursos-multimedia/eventos/galeria/networking-3.jpeg" alt="Evento networking Vasquez Kennedy">
                    </div>
                    <div class="gallery-item horizontal gallery-item-new" data-index="3" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="../recursos-multimedia/eventos/galeria/networking-4.jpeg" alt="Evento networking Vasquez Kennedy">
                    </div>
                    <div class="gallery-item horizontal gallery-item-new" data-index="4" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="../recursos-multimedia/eventos/galeria/networking-5.jpeg" alt="Evento networking Vasquez Kennedy">
                    </div>
                    <div class="gallery-item vertical gallery-item-new" data-index="5" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="../recursos-multimedia/eventos/galeria/networking-6.jpeg" alt="Evento networking Vasquez Kennedy">
                    </div>
                    <div class="gallery-item horizontal" data-index="0" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="../recursos-multimedia/eventos/galeria/img-1.webp" alt="Comunidad Vásquez Kennedy">
                    </div>
                    <div class="gallery-item vertical" data-index="1" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="../recursos-multimedia/eventos/galeria/img-2.webp" alt="Comunidad Vásquez Kennedy">
                    </div>
                    <div class="gallery-item vertical" data-index="2" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="../recursos-multimedia/eventos/galeria/img-3.webp" alt="Comunidad Vásquez Kennedy">
                    </div>
                    <div class="gallery-item horizontal" data-index="3" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        <img src="../recursos-multimedia/eventos/galeria/img-4.webp" alt="Comunidad Vásquez Kennedy">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Imagenes que se despliegan en el carrusel -->
    <div class="modal fade" id="galleryModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-dark border-0">
                <div class="modal-body p-0 position-relative">
                    <button type="button"
                            class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3"
                            data-bs-dismiss="modal">
                    </button>
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../recursos-multimedia/eventos/galeria/networking-1.jpeg" class="d-block w-100" alt="Evento networking Vasquez Kennedy">
                            </div>
                            <div class="carousel-item">
                                <img src="../recursos-multimedia/eventos/galeria/networking-2.jpeg" class="d-block w-100" alt="Evento networking Vasquez Kennedy">
                            </div>
                            <div class="carousel-item">
                                <img src="../recursos-multimedia/eventos/galeria/networking-3.jpeg" class="d-block w-100" alt="Evento networking Vasquez Kennedy">
                            </div>
                            <div class="carousel-item">
                                <img src="../recursos-multimedia/eventos/galeria/networking-4.jpeg" class="d-block w-100" alt="Evento networking Vasquez Kennedy">
                            </div>
                            <div class="carousel-item">
                                <img src="../recursos-multimedia/eventos/galeria/networking-5.jpeg" class="d-block w-100" alt="Evento networking Vasquez Kennedy">
                            </div>
                            <div class="carousel-item">
                                <img src="../recursos-multimedia/eventos/galeria/networking-6.jpeg" class="d-block w-100" alt="Evento networking Vasquez Kennedy">
                            </div>
                        </div>
                        <button class="carousel-control-prev"
                                type="button"
                                data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next"
                                type="button"
                                data-bs-target="#carouselExample"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-logo-box">
                <img src="../recursos-multimedia/logos/logo-vasquez-kennedy-negativo.webp" class="footer-logo" alt="Logo negativo de Vásquez Kennedy consultora de desarrollo de carrera y outplacement">
            </div>
            <div class="footer-grid">
                <div class="footer-col contacto-col">
                    <h5>¿Quieres saber más sobre nuestros servicios?</h5>
                    <p class="contacto text-p5">
                        <span class="icono" style="color: var(--color-secundario);">
                            <i class="bi bi-telephone-fill"></i>
                        </span>
                        (+57) 319 535 2370
                    </p>
                    <p class="contacto text-p5">
                        <span class="icono">
                            <i class="bi bi-envelope-fill" style="color: var(--color-secundario);"></i>
                        </span>
                        monica.cubides@vasquezkennedy.com
                    </p>
                    <p class="contacto text-p5">
                        <span class="icono">
                            <i class="bi bi-telephone-fill" style="color: var(--color-secundario);"></i>
                        </span>
                        (+57) 314 487 7898
                    </p>
                    <p class="contacto text-p5">
                        <span class="icono">
                            <i class="bi bi-envelope-fill" style="color: var(--color-secundario);"></i>
                        </span>
                        diana.ruiz@vasquezkennedy.com
                    </p>
                    <a href="https://wa.link/s3ece3" class="btn-contacto text-p5"><b>Contáctanos</b></a>
                </div>
                <!-- Columna 2 -->
                <div class="footer-col">
                    <h6><b>Para empresas</b></h6>
                    <p class="text-p5">
                        <a href="../pages/outplacement-empresas.php">Outplacement</a>
                    </p>
                    <p class="text-p5">
                        <a href="../pages/desarrollo-carrera.php">Desarrollo de Carrera</a>
                    </p>
                    <p class="text-p5">
                        <a href="../pages/gestion-desempeno.php">Gestión del Desempeño</a>
                    </p>
                    <p class="text-p5">
                        <a href="../pages/experiencia-empleado.php">Experiencia del Empleado</a>
                    </p>
                    <br>
                    <h6><b>Para Personas</b></h6>
                    <p class="text-p5">
                        <a href="../pages/outplacement-personas.php">Outplacement</a>
                    </p>
                    <p class="text-p5">
                        <a href="../pages/desarrollo-carrera-personas.php">Desarrollo de Carrera</a>
                    </p>
                </div>
                <!-- Columna 3 -->
                <div class="footer-col">
                    <h6><b>Políticas de privacidad</b></h6>
                    <p class="text-p5">
                        <a href="#">Consulta nuestras políticas de privacidad</a>
                    </p>
                    <h6 class="mt-4"><b>Redes sociales</b></h6>
                    <div class="redes">
                        <a href="https://www.facebook.com/vasquezkennedy/" target="_blank">
                            <img src="../recursos-multimedia/logos/icon-facebook.webp" alt="Vásquez Kennedy en Facebook">
                        </a>
                        <a href="https://www.linkedin.com/company/vasquez-kennedy-outplacement-desarrollo-carrera-independencia-laboral-reestructuraciones/" target="_blank">
                            <img src="../recursos-multimedia/logos/icon-linked-in.webp" alt="Vásquez Kennedy en LinkedIn">
                        </a>
                        <a href="https://www.youtube.com/@vasquezkennedy9585" target="_blank">
                            <img src="../recursos-multimedia/logos/icon-youtube.webp" alt="Canal de YouTube de Vásquez Kennedy">
                        </a>
                        <a href="https://www.instagram.com/vasquezkennedycol/" target="_blank">
                            <img src="../recursos-multimedia/logos/icon-instagram.webp" alt="Vásquez Kennedy en Instagram">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="https://wa.link/s3ece3" target="_blank" class="whatsapp-float">
        <img src="../recursos-multimedia/logos/icon-whatsapp-color.webp" alt="Contactar a Vásquez Kennedy por WhatsApp">
    </a>

    <!-- Bootstrap 5: JS y Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="<?= asset_url('../js/carousel-eventos.js') ?>"></script>
    <script src="<?= asset_url('../js/carousel-blogs.js') ?>"></script>
    <script src="<?= asset_url('../js/carousel-galeria-imagenes.js') ?>"></script>
  </body>
</html>

