<?php require_once __DIR__ . '/cache-control.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vásquez Kennedy</title>
<?php render_open_graph(); ?>
    <link rel="icon" type="image/x-icon" href="recursos-multimedia/logos/icon-vasquez-kennedy.ico">
    <link rel="preload" as="image" href="<?= asset_url('recursos-multimedia/home/banner-1-background.webp') ?>" fetchpriority="high">
    <link href="<?= asset_url('styles/bootstrap-home.min.css') ?>" rel="stylesheet">
    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="<?= asset_url('styles/global.css') ?>" />
    <link rel="stylesheet" href="<?= asset_url('styles/home.css') ?>" />
    <style>
      *,*::before,*::after{box-sizing:border-box}body{margin:0}.container{width:100%;max-width:1320px;margin-right:auto;margin-left:auto;padding-right:12px;padding-left:12px}.navbar{position:relative;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between}.navbar>.container{display:flex;flex-wrap:inherit;align-items:center;justify-content:space-between}.navbar-brand{display:block}.navbar-toggler{display:none}.navbar-collapse{display:flex!important;flex-basis:auto;align-items:center}.navbar-nav{display:flex;flex-direction:row;padding-left:0;margin:0 0 0 auto;list-style:none;column-gap:1rem}.nav-link{display:block;padding:.5rem;color:inherit;text-decoration:none}.dropdown{position:relative}.dropdown-menu{position:absolute;z-index:1000;display:none;min-width:10rem;padding:.5rem 0;margin:0;list-style:none;background:#fff;border:1px solid rgba(0,0,0,.15);border-radius:.375rem}.dropdown-menu.show,.dropdown.show>.dropdown-menu{display:block}.dropdown-item{display:block;width:100%;padding:.25rem 1rem;text-align:inherit;text-decoration:none;background:transparent;border:0}.carousel{position:relative}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-item{position:relative;display:none;width:100%;backface-visibility:hidden}.carousel-item.active{display:block}.carousel-indicators{position:absolute;right:0;bottom:0;left:0;z-index:2;display:flex;justify-content:center;padding:0;margin:0 15% 1rem;list-style:none}.pt-3{padding-top:1rem}.pb-3{padding-bottom:1rem}
      @media(max-width:991.98px){.navbar-toggler{display:block}.navbar-collapse{flex-basis:100%}.navbar-collapse:not(.show){display:none!important}.navbar-collapse.show{display:block!important}.navbar-nav{flex-direction:column}.dropdown-menu{position:static}}
    </style>
  </head>

  <body>
    <a class="skip-link" href="#contenido-principal">Saltar al contenido principal</a>
    <nav class="navbar navbar-expand-lg bg-body-tertiary pt-3 pb-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="<?= asset_url('recursos-multimedia/logos/logo-vasquez-kennedy-header.webp') ?>" alt="Logo de Vásquez Kennedy consultora de desarrollo de carrera y outplacement" width="120" height="52" fetchpriority="high">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto column-gap-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="pages/quienes-somos.php">Quiénes Somos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <button class="dropdown-item dropdown-toggle" type="button" aria-expanded="false">Para Empresas</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/outplacement-empresas.php">Outplacement</a></li>
                                <li><a class="dropdown-item" href="pages/desarrollo-carrera.php">Desarrollo de Carrera</a></li>
                                <li><a class="dropdown-item" href="pages/gestion-desempeno.php">Gestión del Desempeño</a></li>
                                <li><a class="dropdown-item" href="pages/experiencia-empleado.php">Experiencia del Empleado</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <button class="dropdown-item dropdown-toggle" type="button" aria-expanded="false">Para Personas</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/outplacement-personas.php">Outplacement</a></li>
                                <li><a class="dropdown-item" href="pages/desarrollo-carrera-personas.php">Desarrollo de Carrera</a></li>
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
                <li class="nav-item" hidden>
                    <a class="nav-link" href="pages/eventos.php">Agora Abierta</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <main id="contenido-principal">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500" aria-label="Mensajes destacados">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-label="Mostrar mensaje 1" aria-current="true"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Mostrar mensaje 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Mostrar mensaje 3"></button>
        </div>
        <div class="carousel-inner">
            <!-- SLIDE 1 -->
            <div class="carousel-item active hero-slide">
                <video muted loop playsinline preload="none" poster="<?= asset_url('recursos-multimedia/home/banner-1-background.webp') ?>" data-video-src="recursos-multimedia/home/video-slide-1.mp4" aria-hidden="true" tabindex="-1" fetchpriority="high">
                    <track kind="captions" srclang="es" label="Español" src="<?= asset_url('recursos-multimedia/home/captions-es.vtt') ?>">
                </video>
                <div class="hero-overlay">
                    <div class="container">
                        <h1>
                            ¿Le atemoriza la necesidad de competir
                            con empresas globales en su propio mercado?
                        </h1>
                        <a class="btn-hero text-p3" href="https://wa.link/s3ece3"><b>Conoce más</b></a>

                    </div>
                </div>
            </div>
            <!-- SLIDE 2 -->
            <div class="carousel-item hero-slide">
                <video muted loop playsinline preload="none" poster="<?= asset_url('recursos-multimedia/home/comunidad-vk-background.webp') ?>" data-video-src="recursos-multimedia/home/video-slide-2.mp4" aria-hidden="true" tabindex="-1">
                    <track kind="captions" srclang="es" label="Español" src="<?= asset_url('recursos-multimedia/home/captions-es.vtt') ?>">
                </video>

                <div class="hero-overlay">
                    <div class="container">
                        <h1>¿Es más lo que invierte su empresa en el desarrollo y el bienestar de los empleados que lo que logra en su productividad?</h1>
                        <a class="btn-hero text-p3" href="https://wa.link/s3ece3"><b>Contáctanos</b></a>
                    </div>
                </div>
            </div>

            <!-- SLIDE 3 -->
            <div class="carousel-item hero-slide">
                <video muted loop playsinline preload="none" poster="<?= asset_url('recursos-multimedia/home/banner-2-background.webp') ?>" data-video-src="recursos-multimedia/home/video-slide-3.mp4" aria-hidden="true" tabindex="-1">
                    <track kind="captions" srclang="es" label="Español" src="<?= asset_url('recursos-multimedia/home/captions-es.vtt') ?>">
                </video>
                <div class="hero-overlay">
                    <div class="container">
                        <h1>Cómo lograr el más alto nivel de desempeño de cada empleado en el corto plazo ¡ESTÁ INVENTADO!</h1>
                        <a class="btn-hero text-p3" href="https://wa.link/s3ece3"><b>Escríbenos</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner" style="background-image: url('recursos-multimedia/home/banner-1-background.webp');">
        <div class="container banner-content">
            <h2>En Colombia, por fin tenemos</h2>

            <img src="<?= asset_url('recursos-multimedia/logos/logo-paas-home.webp') ?>"
                alt="Modelo PaaS para gestión de desempeño y desarrollo de carrera"
                class="banner-logo" width="400" height="150" decoding="async">
            <p class="text-p3"><b>PaaS</b> es un modelo delegado para la gestión del desarrollo de los empleados.</p>
            <p class="text-p3">En Vásquez Kennedy nos hacemos cargo de mejorar la productividad y el compromiso de cada empleado.</p>
        </div>
    </div>

    <section class="paas-section">
        <div class="card-container">
            <!-- Tarjeta 1 -->
            <div class="flip-card-banner-3" style="--imagen:url('../recursos-multimedia/home/banner-3-card-1.webp'); --color-fondo: rgba(10,80,140,0.6)">
                <div class="flip-inner-banner-3">
                    <div class="flip-front-banner-3"></div>
                    <div class="flip-back-banner-3">
                        <div class="card-text-banner-3">
                            <h2>¿Cómo lo hace PaaS?</h2>
                            <p>Nos hacemos cargo del desarrollo de sus empleados sin grandes inversiones ni tiempos largos de espera.</p>
                            <ul>
                                <li>Con tecnología e IA para el uso inteligente de los datos de los empleados.</li>
                                <li>Con metodología robusta construida en tres décadas de trayectoria atendiendo el desarrollo profesional de más de 15.000 empleados.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="flip-card-banner-3" style="--imagen:url('../recursos-multimedia/home/banner-3-card-2.webp'); --color-fondo: rgba(124, 159, 204,0.6)">
                <div class="flip-inner-banner-3">
                    <div class="flip-front-banner-3"></div>
                    <div class="flip-back-banner-3">
                        <div class="card-text-banner-3">
                            <h3>PaaS es un modelo flexible que se adapta exactamente a lo que necesita su empresa:</h3>
                            <ul>
                                <li>Vásquez Kennedy se hace cargo directamente de la implementación de PaaS en su empresa… desde mañana mismo.</li>
                                <li>Implementamos el modelo gradualmente, a la velocidad apropiada.</li>
                                <li>Es potencialmente adaptable a plataformas tecnológicas diferentes a las que ofrecemos.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="container mt-4 mb-2 py-0 px-4">
        <div class="row">
            <div class="col-12">
                <div class="card tarjeta-diagnostico mb-3">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-1 text-center">
                            <img src="<?= asset_url('recursos-multimedia/home/banner-4-img-small.webp') ?>" class="rounded-circle img-diagnostico" alt="Diagnóstico del desarrollo del talento y su impacto en la productividad" width="300" height="300" loading="lazy" decoding="async">
                        </div>

                        <div class="col-md-11">
                            <div class="card-body text-white text-center">
                                <p class="mb-2">
                                    <strong>
                                    Evalúa qué tan alineado está el desarrollo de tu equipo con los resultados de tu empresa.
                                    </strong>
                                    Completa este diagnóstico y obtén de inmediato una visión clara de su impacto en productividad y compromiso.
                                </p>
                                <a href="https://ivlv.me/gWAbo" target="_blank" class="btn boton-test rounded-pill px-5">
                                    Hacer test
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="servicios-section">
        <div class="container">
            <div class="servicios-grid">
                <!-- Tarjeta 1 -->
                <div class="servicio-card">
                    <img src="<?= asset_url('recursos-multimedia/home/service-card-1-small.webp') ?>" class="servicio-img" alt="Programa de outplacement para empresas y transición laboral de empleados" width="480" height="405" loading="lazy" decoding="async">
                    <div class="servicio-frame" style="padding-bottom: 0px;">
                        <h3 style="padding-bottom: 15px;"><i>Outplacement</i> / Transición de Carrera</h3>
                        <div class="servicio-opciones">
                            <a href="pages/outplacement-empresas.php" class="opcion text-p4">Para Empresas <span><strong>→</strong></span></a>
                            <a href="pages/outplacement-personas.php" class="opcion text-p4">Para Particulares <span><strong>→</strong></span></a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="servicio-card">
                    <img src="<?= asset_url('recursos-multimedia/home/service-card-2-small.webp') ?>" class="servicio-img" alt="Servicios de desarrollo de carrera y crecimiento profesional" width="480" height="405" loading="lazy" decoding="async">
                    <div class="servicio-frame">
                        <a href="pages/desarrollo-carrera.php" class="servicio-arrow" aria-label="Conocer el servicio de Desarrollo de Carrera">
                            <span aria-hidden="true">→</span>
                        </a>
                        <h3>Desarrollo de Carrera</h3>
                        <p>
                           Cada empleado mejora continuamente sus habilidades para impactar los resultados
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="servicio-card">
                    <img src="<?= asset_url('recursos-multimedia/home/service-card-3-small.webp') ?>" class="servicio-img" alt="Sistema de gestión del desempeño laboral y desarrollo profesional" width="480" height="405" loading="lazy" decoding="async">
                    <div class="servicio-frame">
                        <a href="pages/gestion-desempeno.php" class="servicio-arrow" aria-label="Conocer el servicio de Gestión del Desempeño">
                            <span aria-hidden="true">→</span>
                        </a>

                        <h3>Gestión del Desempeño</h3>
                        <p>
                            Cada empleado trabaja con foco en sus resultados
                            claves alineados con los de la empresa.
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="servicio-card">
                    <img src="<?= asset_url('recursos-multimedia/home/service-card-4-small.webp') ?>" class="servicio-img" alt="Estrategias para mejorar la experiencia y compromiso del empleado" width="480" height="405" loading="lazy" decoding="async">
                    <div class="servicio-frame">
                        <a href="pages/experiencia-empleado.php" class="servicio-arrow" aria-label="Conocer el servicio de Experiencia del Empleado">
                            <span aria-hidden="true">→</span>
                        </a>
                        <h3>Experiencia del empleado</h3>
                        <p>
                            Cada empleado mejorando continuamente su compromiso con la empresa
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="banner-tarjetas" style = "background-image: url('recursos-multimedia/home/banner-2-background.webp');">
        <div class="container">
            <h2>Plataformas de tecnología avanzada para gestionar el desarrollo de los empleados</h2>
            <div class="tarjetas-grid">
                <!-- Tarjeta 1 -->
                <div class="flip-card">
                    <a href="pages/conekta.php" class="flip-link">
                        <div class="flip-inner">
                            <div class="flip-front">
                                <img src="<?= asset_url('recursos-multimedia/home/banner-2-card-1.webp') ?>" class="card-logo" alt="Plataforma Conekta para fortalecer el liderazgo y la conexión entre personas y equipos" width="800" height="285" loading="lazy" decoding="async">
                            </div>
                            <div class="flip-back">
                                <p>
                                    Plataforma para una experiencia de aprendizaje trascendente y para crear intercambios con actores claves.
                                </p>
                                <span class="flip-more-hint">Clic para más información</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Tarjeta 2 -->
                <div class="flip-card">
                    <a href="pages/ioda.php" class="flip-link">
                        <div class="flip-inner">
                            <div class="flip-front">
                                <img src="<?= asset_url('recursos-multimedia/home/banner-2-card-2.webp') ?>" class="card-logo" alt="IODA Analytics plataforma de análisis de datos para gestión del talento humano" width="800" height="304" loading="lazy" decoding="async">
                            </div>
                            <div class="flip-back">
                                <p>
                                    Plataforma para gestionar el desarrollo de los empleados y tomar decisiones basadas en el uso inteligente de los datos de los empleados.
                                </p>
                                <span class="flip-more-hint">Clic para más información</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="video-section">
        <div class="video-container">
            <div class="video-wrapper">
                <button class="lite-video" type="button" data-video-id="1uckZiyojC0" data-video-title="Video Conekta" aria-label="Reproducir video Conekta">
                    <img src="https://i.ytimg.com/vi/1uckZiyojC0/hqdefault.jpg" alt="Vista previa del video Conekta" width="480" height="360" loading="lazy" decoding="async">
                    <span class="lite-video-play" aria-hidden="true">▶</span>
                </button>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container-about">

            <div class="about-image">
                <div class="about-text">
                    <h2>¿Quiénes somos?</h2>
                </div>
                <img src="<?= asset_url('recursos-multimedia/home/equipo-trabajo.webp') ?>" alt="Equipo de trabajo Vásquez Kennedy" width="800" height="533" loading="lazy" decoding="async">
            </div>
            
            <div class="about-text">
                <p>
                    Tres décadas acompañando el desarrollo del éxito de más de
                    15.000 profesionales en el éxito de sus carreras.
                </p>
                <p>
                    Tecnología avanzada e IA para el desarrollo de los empleados.
                </p>
                <p><strong>Un equipo humano HUMANO.</strong></p>
                <a href="pages/quienes-somos.php" class="btn-about">Conócenos</a>
            </div>
        </div>
    </section>

    <section class="valores">
        <div class="container">
            <h2>Nuestros valores:</h2>

            <div class="cards-valores">
                <div class="card-valores">
                    <img src="<?= asset_url('recursos-multimedia/home/valores-img-1.webp') ?>" alt="Valor trascendencia en el desarrollo profesional" width="800" height="533" loading="lazy" decoding="async">
                    <h3>TRASCENDENCIA</h3>
                    <p>
                    Nuestro mayor compromiso con nuestras experiencias de aprendizaje es que tengan consecuencias importantes para las personas.
                    </p>
                </div>

                <div class="card-valores">
                    <img src="<?= asset_url('recursos-multimedia/home/valores-img-2.webp') ?>" alt="Valor accesibilidad en servicios de desarrollo profesional" width="800" height="533" loading="lazy" decoding="async">
                    <h3>ACCESIBILIDAD</h3>
                    <p>
                    Reducimos continuamente las barreras geográficas, operativas y económicas para el acceso a nuestros servicios.
                    </p>
                </div>

                <div class="card-valores">
                    <img src="<?= asset_url('recursos-multimedia/home/valores-img-3.webp') ?>" alt="Valor impecabilidad en la calidad de servicios profesionales" width="800" height="533" loading="lazy" decoding="async">
                    <h3>IMPECABILIDAD</h3>
                    <p>
                    Nos aseguramos de tener contenidos coherentes y actualizados y de presentar nuestros productos con los más altos estándares de estética y perfección.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="webinars-section">
        <div class="webinars-overlay"></div>
        <div class="container">
            <div class="webinars-content">
                <div class="webinar-info">
                    <h2 class="webinars-title">
                        Conoce a la comunidad VK
                    </h2>
                    <p class="text-p3">
                        La Comunidad VK es un espacio creado para acompañarte más allá de un programa, una transición laboral o un proceso de formación. Aquí encontrarás oportunidades para aprender, ampliar tu red de contactos, mantenerte actualizado sobre las tendencias del mercado laboral y conectar con otros profesionales que, como tú, siguen construyendo su desarrollo de carrera. 
                    </p>
                    <p class="text-p3">
                        Descubre en este video cómo la Comunidad VK puede ayudarte a mantenerte visible, conectado y en crecimiento constante.
                    </p>
                </div>
                <div class="webinar-video">
                    <button class="lite-video" type="button" data-video-id="s_yZB5Uq-Ss" data-video-title="Comunidad VK" aria-label="Reproducir video de la Comunidad VK">
                        <img src="https://i.ytimg.com/vi/s_yZB5Uq-Ss/hqdefault.jpg" alt="Vista previa del video Comunidad VK" width="480" height="360" loading="lazy" decoding="async">
                        <span class="lite-video-play" aria-hidden="true">▶</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-logo-box">
                <img src="<?= asset_url('recursos-multimedia/logos/logo-vasquez-kennedy-negativo.webp') ?>" class="footer-logo" alt="Logo negativo de Vásquez Kennedy consultora de desarrollo de carrera y outplacement" width="800" height="340" loading="lazy" decoding="async">
            </div>
            <div class="footer-grid">
                <div class="footer-col contacto-col">
                    <p class="footer-title">¿Quieres saber más sobre nuestros servicios?</p>
                    <p class="contacto text-p5">
                        <span class="icono" style="color: var(--color-secundario);">
                            <span aria-hidden="true">☎</span>
                        </span>
                        (+57) 319 535 2370
                    </p>
                    <p class="contacto text-p5">
                        <span class="icono">
                            <span aria-hidden="true" style="color: var(--color-secundario);">✉</span>
                        </span>
                        monica.cubides@vasquezkennedy.com
                    </p>
                    <p class="contacto text-p5">
                        <span class="icono">
                            <span aria-hidden="true" style="color: var(--color-secundario);">☎</span>
                        </span>
                        (+57) 314 487 7898
                    </p>
                    <p class="contacto text-p5">
                        <span class="icono">
                            <span aria-hidden="true" style="color: var(--color-secundario);">✉</span>
                        </span>
                        diana.ruiz@vasquezkennedy.com
                    </p>
                    <a href="https://wa.link/s3ece3" class="btn-contacto text-p5"><b>Contáctanos</b></a>
                </div>
                <!-- Columna 2 -->
                <div class="footer-col">
                    <p class="footer-subtitle"><b>Para empresas</b></p>
                    <p class="text-p5">
                        <a href="pages/outplacement-empresas.php" aria-label="Outplacement para empresas">Outplacement</a>
                    </p>
                    <p class="text-p5">
                        <a href="pages/desarrollo-carrera.php">Desarrollo de Carrera</a>
                    </p>
                    <p class="text-p5">
                        <a href="pages/gestion-desempeno.php">Gestión del Desempeño</a>
                    </p>
                    <p class="text-p5">
                        <a href="pages/experiencia-empleado.php">Experiencia del Empleado</a>
                    </p>
                    <br>
                    <p class="footer-subtitle"><b>Para Personas</b></p>
                    <p class="text-p5">
                        <a href="pages/outplacement-personas.php" aria-label="Outplacement para personas">Outplacement</a>
                    </p>
                    <p class="text-p5">
                        <a href="pages/desarrollo-carrera-personas.php">Desarrollo de Carrera</a>
                    </p>
                </div>
                <!-- Columna 3 -->
                <div class="footer-col">
                    <p class="footer-subtitle"><b>Políticas de privacidad</b></p>
                    <p class="text-p5">
                        <a href="#">Consulta nuestras políticas de privacidad</a>
                    </p>
                    <p class="footer-subtitle mt-4"><b>Redes sociales</b></p>
                    <div class="redes">
                        <a href="https://www.facebook.com/vasquezkennedy/" target="_blank" rel="noopener noreferrer" aria-label="Vásquez Kennedy en Facebook">
                            <img src="<?= asset_url('recursos-multimedia/logos/icon-facebook.webp') ?>" alt="" width="400" height="400" loading="lazy" decoding="async">
                        </a>
                        <a href="https://www.linkedin.com/company/vasquez-kennedy-outplacement-desarrollo-carrera-independencia-laboral-reestructuraciones/" target="_blank" rel="noopener noreferrer" aria-label="Vásquez Kennedy en LinkedIn">
                            <img src="<?= asset_url('recursos-multimedia/logos/icon-linked-in.webp') ?>" alt="" width="400" height="400" loading="lazy" decoding="async">
                        </a>
                        <a href="https://www.youtube.com/@vasquezkennedy9585" target="_blank" rel="noopener noreferrer" aria-label="Canal de YouTube de Vásquez Kennedy">
                            <img src="<?= asset_url('recursos-multimedia/logos/icon-youtube.webp') ?>" alt="" width="400" height="281" loading="lazy" decoding="async">
                        </a>
                        <a href="https://www.instagram.com/vasquezkennedycol/" target="_blank" rel="noopener noreferrer" aria-label="Vásquez Kennedy en Instagram">
                            <img src="<?= asset_url('recursos-multimedia/logos/icon-instagram.webp') ?>" alt="" width="400" height="400" loading="lazy" decoding="async">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="https://wa.link/s3ece3" target="_blank" rel="noopener noreferrer" class="whatsapp-float" aria-label="Contactar a Vásquez Kennedy por WhatsApp">
        <img src="<?= asset_url('recursos-multimedia/logos/icon-whatsapp-home.webp') ?>" alt="" width="100" height="100" decoding="async">
    </a>

    <!-- Bootstrap 5: JS y Popper -->
    <script src="<?= asset_url('js/home-performance.js') ?>"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
  </body>

</html>
