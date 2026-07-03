<?php require_once __DIR__ . '/cache-control.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vásquez Kennedy</title>
<?php render_open_graph(); ?>
    <link rel="icon" type="image/x-icon" href="recursos-multimedia/logos/icon-vasquez-kennedy.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="<?= asset_url('styles/global.css') ?>" />
    <link rel="stylesheet" href="<?= asset_url('styles/home.css') ?>" />
    <!-- Fuente de texto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary pt-3 pb-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="recursos-multimedia/logos/logo-vasquez-kennedy.webp" alt="Logo de Vásquez Kennedy consultora de desarrollo de carrera y outplacement" width="120" height="50">
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
                            <a class="dropdown-item dropdown-toggle">Para Empresas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/outplacement-empresas.php">Outplacement</a></li>
                                <li><a class="dropdown-item" href="pages/desarrollo-carrera.php">Desarrollo de Carrera</a></li>
                                <li><a class="dropdown-item" href="pages/gestion-desempeno.php">Gestión del Desempeño</a></li>
                                <li><a class="dropdown-item" href="pages/experiencia-empleado.php">Experiencia del Empleado</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle">Para Personas</a>
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

    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <!-- SLIDE 1 -->
            <div class="carousel-item active hero-slide">
                <video autoplay muted loop playsinline preload="auto">
                    <source src="recursos-multimedia/home/video-slide-1.mp4" type="video/mp4">
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
                <video autoplay muted loop playsinline>
                    <source src="recursos-multimedia/home/video-slide-2.mp4" type="video/mp4">
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
                <video autoplay muted loop playsinline>
                    <source src="recursos-multimedia/home/video-slide-3.mp4" type="video/mp4">
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
            <h3>En Colombia, por fin tenemos</h3>

            <img src="recursos-multimedia/logos/logo-paas.webp" 
                alt="Modelo PaaS para gestión de desempeño y desarrollo de carrera"
                class="banner-logo" >
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
                            <h4>PaaS es un modelo flexible que se adapta exactamente a lo que necesita su empresa:</h4>
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
                            <img src="recursos-multimedia/home/banner-4-img.webp" class="rounded-circle img-diagnostico" alt="Diagnóstico del desarrollo del talento y su impacto en la productividad">
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
                    <img src="recursos-multimedia/home/service-card-1.webp" class="servicio-img" alt="Programa de outplacement para empresas y transición laboral de empleados">
                    <div class="servicio-frame" style="padding-bottom: 0px;">
                        <h5 style="padding-bottom: 15px;"><i>Outplacement</i> / Transición de Carrera</h5>
                        <div class="servicio-opciones">
                            <a href="pages/outplacement-empresas.php" class="opcion text-p4">Para Empresas <span><strong>→</strong></span></a>
                            <a href="pages/outplacement-personas.php" class="opcion text-p4">Para Particulares <span><strong>→</strong></span></a>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="servicio-card">
                    <img src="recursos-multimedia/home/service-card-2.webp" class="servicio-img" alt="Servicios de desarrollo de carrera y crecimiento profesional">
                    <div class="servicio-frame">
                        <a href="pages/desarrollo-carrera.php" class="servicio-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <h5>Desarrollo de Carrera</h5>
                        <p>
                           Cada empleado mejora continuamente sus habilidades para impactar los resultados
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="servicio-card">
                    <img src="recursos-multimedia/home/service-card-3.webp" class="servicio-img" alt="Sistema de gestión del desempeño laboral y desarrollo profesional">
                    <div class="servicio-frame">
                        <a href="pages/gestion-desempeno.php" class="servicio-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </a>

                        <h5>Gestión del Desempeño</h5>
                        <p>
                            Cada empleado trabaja con foco en sus resultados
                            claves alineados con los de la empresa.
                        </p>
                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="servicio-card">
                    <img src="recursos-multimedia/home/service-card-4.webp" class="servicio-img" alt="Estrategias para mejorar la experiencia y compromiso del empleado">
                    <div class="servicio-frame">
                        <a href="pages/experiencia-empleado.php" class="servicio-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <h5>Experiencia del empleado</h5>
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
            <h5>Plataformas de tecnología avanzada para gestionar el desarrollo de los empleados</h5>
            <div class="tarjetas-grid">
                <!-- Tarjeta 1 -->
                <div class="flip-card">
                    <a href="pages/conekta.php" class="flip-link">
                        <div class="flip-inner">
                            <div class="flip-front">
                                <img src="recursos-multimedia/home/banner-2-card-1.webp" class="card-logo" alt="Plataforma Conekta para fortalecer el liderazgo y la conexión entre personas y equipos">
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
                                <img src="recursos-multimedia/home/banner-2-card-2.webp" class="card-logo" alt="IODA Analytics plataforma de análisis de datos para gestión del talento humano">
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
                <iframe 
                    src="https://www.youtube.com/embed/1uckZiyojC0"
                    title="Video Conekta"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container-about">

            <div class="about-image">
                <div class="about-text">
                    <h2>¿Quiénes somos?</h2>
                </div>
                <img src="recursos-multimedia/home/equipo-trabajo.webp" alt="Equipo de trabajo Vásquez Kennedy">
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
                    <img src="recursos-multimedia/home/valores-img-1.webp" alt="Valor trascendencia en el desarrollo profesional">
                    <h3>TRASCENDENCIA</h3>
                    <p>
                    Nuestro mayor compromiso con nuestras experiencias de aprendizaje es que tengan consecuencias importantes para las personas.
                    </p>
                </div>

                <div class="card-valores">
                    <img src="recursos-multimedia/home/valores-img-2.webp" alt="Valor accesibilidad en servicios de desarrollo profesional">
                    <h3>ACCESIBILIDAD</h3>
                    <p>
                    Reducimos continuamente las barreras geográficas, operativas y económicas para el acceso a nuestros servicios.
                    </p>
                </div>

                <div class="card-valores">
                    <img src="recursos-multimedia/home/valores-img-3.webp" alt="Valor impecabilidad en la calidad de servicios profesionales">
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
                    <iframe 
                        src="https://www.youtube.com/embed/s_yZB5Uq-Ss"
                        title="Webinar"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-logo-box">
                <img src="recursos-multimedia/logos/logo-vasquez-kennedy-negativo.webp" class="footer-logo" alt="Logo negativo de Vásquez Kennedy consultora de desarrollo de carrera y outplacement">
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
                        <a href="pages/outplacement-empresas.php">Outplacement</a>
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
                    <h6><b>Para Personas</b></h6>
                    <p class="text-p5">
                        <a href="pages/outplacement-personas.php">Outplacement</a>
                    </p>
                    <p class="text-p5">
                        <a href="pages/desarrollo-carrera-personas.php">Desarrollo de Carrera</a>
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
                            <img src="recursos-multimedia/logos/icon-facebook.webp" alt="Vásquez Kennedy en Facebook">
                        </a>
                        <a href="https://www.linkedin.com/company/vasquez-kennedy-outplacement-desarrollo-carrera-independencia-laboral-reestructuraciones/" target="_blank">
                            <img src="recursos-multimedia/logos/icon-linked-in.webp" alt="Vásquez Kennedy en LinkedIn">
                        </a>
                        <a href="https://www.youtube.com/@vasquezkennedy9585" target="_blank">
                            <img src="recursos-multimedia/logos/icon-youtube.webp" alt="Canal de YouTube de Vásquez Kennedy">
                        </a>
                        <a href="https://www.instagram.com/vasquezkennedycol/" target="_blank">
                            <img src="recursos-multimedia/logos/icon-instagram.webp" alt="Vásquez Kennedy en Instagram">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="https://wa.link/s3ece3" target="_blank" class="whatsapp-float">
        <img src="recursos-multimedia/logos/icon-whatsapp-color.webp" alt="Contactar a Vásquez Kennedy por WhatsApp">
    </a>

    <!-- Bootstrap 5: JS y Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
  </body>

</html>
