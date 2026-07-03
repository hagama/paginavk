<?php require_once dirname(__DIR__) . '/cache-control.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VK - Agora Abierta</title>
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
                <li class="nav-item" hidden>
                    <a class="nav-link active" href="../pages/eventos.php">Agora Abierta</a>
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
            <div class="blogs-slider">
                <div class="blogs-track">
                    <!-- BLOG 1 -->
                    <article class="blog-card">
                        <div class="blog-content">
                            <h4>
                                Título del blog
                            </h4>
                            <span class="blog-date text-p4">
                                23 Mayo, 2026
                            </span>
                            <div class="blog-line"></div>
                            <p>
                                Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea
                                commodo consequat.
                            </p>
                        </div>
                    </article>

                    <!-- BLOG 2 -->
                    <article class="blog-card">
                        <div class="blog-content">
                            <h4>
                                Título del blog
                            </h4>
                            <span class="blog-date text-p4">
                                23 Mayo, 2026
                            </span>
                            <div class="blog-line"></div>
                            <p>
                                Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea
                                commodo consequat.
                            </p>
                        </div>
                    </article>

                    <!-- BLOG 3 -->
                    <article class="blog-card">
                        <div class="blog-content">
                            <h4>
                                Título del blog
                            </h4>
                            <span class="blog-date text-p4">
                                23 Mayo, 2026
                            </span>
                            <div class="blog-line"></div>
                            <p>
                                Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea
                                commodo consequat.
                            </p>
                        </div>
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
                            Alguna frase que llame la atención que haya dicho
                            Camilo en uno de sus podcast
                        </h3>
                        <div class="podcast-platforms">
                            <a href="#" class="platform-btn">
                                <img src="../recursos-multimedia/eventos/podcast-youtube.webp" alt="Podcast de Vásquez Kennedy en YouTube" style="height: 28px;">
                            </a>
                            <a href="#" class="platform-btn">
                                <img src="../recursos-multimedia/eventos/podcast-spotify.webp" alt="Podcast de Vásquez Kennedy en Spotify" style="height: 35px;">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="podcast-player-card">
                    <div class="podcast-cover">
                        <img src="../recursos-multimedia/eventos/podcast-foto-camilo.webp" alt="Camilo presentando el podcast de Vásquez Kennedy">
                    </div>
                    <div class="podcast-content">
                        <div class="podcast-header">
                            <h4>Nombre del podcast</h4>
                            <span class="text-p4">23 Mayo, 2026</span>
                        </div>
                        <!-- Spotify Embed -->
                        <div class="spotify-player">
                            <iframe
                                style="border-radius:12px"
                                src="https://open.spotify.com/embed/episode/0IDCXhmJImVUd770VxogQc?si=_IvG6KBQS46n83CC5Bsjdw?utm_source=generator&theme=0"
                                width="100%"
                                height="80"
                                frameBorder="0"
                                allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="podcast-hero-2"> </div>
    </section>

    <section class="eventos-section">
        <div class="eventos-overlay"></div>
        <div class="container">
            <h4 class="eventos-title"><b>¡PRONTO!</b> eventos programados para el próximo mes o dos meses sobre: educación continua, reuniones y eventos con usuarios, master classes, paneles.</h4>
            <div class="eventos-slider">
                <div class="eventos-track"> 
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
                        src="https://www.youtube.com/embed/x91MPoITQ3I"
                        title="Webinar"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>

                <div class="webinar-info text-p3">
                    <p>
                        Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex ea commodo consequat.
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

            <div class="networking-wrapper">
                <!-- VIDEO -->
                <div class="networking-video">
                    <iframe 
                        src="https://www.youtube.com/embed/x91MPoITQ3I"
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- GALERIA -->
                <div class="networking-gallery">
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
                                <img src="../recursos-multimedia/eventos/galeria/img-1.webp" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="../recursos-multimedia/eventos/galeria/img-2.webp" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="../recursos-multimedia/eventos/galeria/img-3.webp" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="../recursos-multimedia/eventos/galeria/img-4.webp" class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="../recursos-multimedia/eventos/galeria/img-5.webp" class="d-block w-100" alt="">
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

