<?php require_once dirname(__DIR__) . '/cache-control.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VK - Outplacement Empresas</title>
<?php render_open_graph(); ?>
    <link rel="icon" type="image/x-icon" href="../recursos-multimedia/logos/icon-vasquez-kennedy.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Hojas de Estilos -->
    <link rel="stylesheet" href="<?= asset_url('../styles/global.css') ?>" />
    <link rel="stylesheet" href="<?= asset_url('../styles/outplacement-empresas.css') ?>" />
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
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle active">Para Empresas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item active" href="../pages/outplacement-empresas.php">Outplacement</a></li>
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
                    <a class="nav-link" href="../pages/eventos.php">Agora Abierta</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <section class="hero-outplacement">
        <div class="hero-media">
            <video autoplay muted loop playsinline preload="auto" class="hero-video">
                <source src="../recursos-multimedia/outplacement-empresas/video-outplacement-empresas.mp4" type="video/mp4">
            </video>
        </div>

        <div class="hero-content">
            <h3 style="margin-bottom: 15px; color: var(--color-terciario);"><b>OUTPLACEMENT - TRANSICIÓN DE CARRERA</b></h3>
            <p class="text-p3" style="margin-bottom: 0px; color: var(--color-terciario);"><b>Para las empresas</b></p>
            <p class="text-p3" style="margin-bottom: 10px; color: var(--color-terciario);">
                La empresa actuando con responsabilidad social y coherencia en las decisiones más difíciles.
            </p>
        </div>
    </section>

    <section class="success-section">
        <div class="success-container">
            <div class="success-text">
                <h3>Lo que en su empresa se verá con PaaS:</h3>
                <ul>
                    <li class="text-p3">Protección de la reputación interna cuando hay que desvincular a quienes quisieron pero no pudieron. </li>
                    <li class="text-p3">Actuación con responsabilidad social empresarial en relación con sus empleados.</li>
                    <li class="text-p3">Capacidad para atraer y retener solamente a los mejores.</li>
                </ul>
            </div>

            <div class="success-image">
                <img src="../recursos-multimedia/outplacement-empresas/personas-dialogando.webp" alt="Profesionales dialogando en un entorno laboral durante un proceso de transición de carrera">
            </div>
        </div>
    </section>

    <section class="cards-section-desarrollo">
        <div class="cards-container-desarrollo">
            <div class="card-desarrollo">
                <img src="../recursos-multimedia/outplacement-empresas/card-a-1.webp" alt="Empleado recibiendo acompañamiento profesional para su transición a un nuevo empleo">
                <div class="card-desarrollo-body">
                    <h4>La pérdida del empleo asusta a todos. <br>Con PaaS:</h4>
                    <div class="card-desarrollo-extra">
                        <p class="text-p3">Programas para que cada empleado que debe dejar la organización tenga el acompañamiento especializado para su transición a un nuevo trabajo.</p>
                    </div>
                </div>
            </div>

            <div class="card-desarrollo">
                <img src="../recursos-multimedia/outplacement-empresas/card-a-2.webp" alt="Líder empresarial que gestiona desvinculaciones con trato digno">
                <div class="card-desarrollo-body">
                    <h4>Muchos jefes posponen las decisiones difíciles y que causan temor. <br>Con PaaS:</h4>

                    <div class="card-desarrollo-extra">
                        <p class="text-p3">Los jefes reciben entrenamiento y herramientas para asegurar un trato digno y sensitivo a las personas que deben dejar la empresa.</p>
                    </div>
                </div>
            </div>

            <div class="card-desarrollo">
                <img src="../recursos-multimedia/outplacement-empresas/card-a-3.webp" alt="Personas evaluando su desempeño laboral durante un proceso de outplacement">
                <div class="card-desarrollo-body">
                    <h4>En muchas empresas hay un porcentaje de personas con rendimiento inferior al mínimo, que continúan en sus trabajos indefinidamente. <br>Con PaaS:</h4>

                    <div class="card-desarrollo-extra">
                        <p class="text-p3">La empresa debe ser cuidadosa con la elección de quienes se vinculan a ella y de quienes deben dejarla.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="exito-section">
        <h3 class="exito-title">
            ¿En qué nos basamos para ofrecerle altas probabilidades de éxito?
        </h3>
        <div class="exito-cards">
            <!-- CARD 1 -->
            <div class="exito-card">
                <div class="icon">
                    <img src="../recursos-multimedia/outplacement-empresas/card-b-1.webp" alt="Programa integral de transición de carrera para ejecutivos">
                </div>
                <p class ="text-p4" style="line-height: 1.6;">
                    <b>Programas Integrales para ejecutivos:</b> servicio integral con atención altamente personalizada para la transición a un nuevo empleo, a la independencia laboral o jubilación productiva.
                </p>
            </div>
            <!-- CARD 2 -->
            <div class="exito-card">
                <div class="icon">
                    <img src="../recursos-multimedia/outplacement-empresas/card-b-2.webp" alt="Asesoría especializada para optimizar la búsqueda de un nuevo empleo">
                </div>
                <p class ="text-p4" style="line-height: 1.6;">
                    <b>Programas focalizados:</b> optimizar la inversión con capacitación y asesoría especializada dirigidas a lo que cada persona escoge basada en una evaluación de sus destrezas para la búsqueda del nuevo trabajo.
                </p>
            </div>
            <!-- CARD 3 -->
            <div class="exito-card">
                <div class="icon-2">
                    <img src="../recursos-multimedia/logos/logo-conekta-negativo.webp" alt="Logo de Conekta plataforma EdTech de aprendizaje corporativo">
                </div>
                <p class ="text-p4" style="line-height: 1.6;">
                    <b>Conekta:</b> desarrollo tecnológico exclusivo para la gestión del proyecto de transición y la conexión con el mercado.
                </p>
            </div>

        </div>
    </section>

    <section class="about">
        <div class="container-about">
            <div class="about-image">
                <div class="about-text">
                    <h2>Beneficios para la empresa:</h2>
                </div>

                <div class="image-wrapper">
                    <img src="../recursos-multimedia/outplacement-empresas/beneficios-empresa.webp" alt="Análisis de datos y crecimiento empresarial representado en gráficos digitales">
                    <div class="overlay"></div>
                </div>
            </div>
            <div class="about-text">
                <ul>
                    <li class="text-p3"><b>CUIDAR DE LOS QUE SE QUEDAN: </b> El eNPS cambia de 29 a 74 puntos cuando se provee <i>Outplacement</i>.  La Tasa de Cambio (2) varía de 10,8% a 25,7% cuando no se hace (").</li>
                    <li class="text-p3"><b>IMPACTO EN LAS PERSONAS:</b> El 70% considera que la transición a un nuevo trabajo fue positiva para sus vidas.  - El 65% consigue el empleo más pronto que quienes no tienen este programa.</li>
                    <li class="text-p3"><b>IMPACTO SOCIAL Y ECONÓMICO:</b> La empresa actúa en coherencia con los postulados de sostenibilidad y responsabilidad social.</li>
                    <li class="text-p3"><b>COBERTURA GEOGRÁFICA:</b> Capacidad para apoyar la implementación de cambios en la empresa y cubrir a cientos de personas al mismo tiempo en todo el país.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="rutas">
        <div class="container">
            <div class="rutas-header">
                <h3><b>Rutas de aprendizaje</b><br>en nuestro <i>outplacement</i></h3>
                <p class="text-p3">Cada colaborador recibe acompañamiento según su momento de vida profesional.</p>
            </div>
            <div class="rutas-grid">
                <!-- Tarjeta 1 -->
                <div class="ruta-card">
                    <div class="ruta-img">
                        <img src="../recursos-multimedia/outplacement-empresas/card-c-1.webp" alt="Profesional preparándose para buscar un nuevo empleo">
                    </div>
                    <div class="ruta-body">
                        <h5>Hacia un nuevo empleo</h5>
                        <ul>
                            <li class="text-p3">Decisiones de carrera</li>
                            <li class="text-p3">Cómo buscar un empleo</li>
                            <li class="text-p3">Cómo ser un candidato extraordinario</li>
                            <li class="text-p3">Tecnología para la búsqueda de empleo</li>
                        </ul>
                    </div>
                </div>
                <!-- Tarjeta 2 -->
                <div class="ruta-card">
                    <div class="ruta-img">
                        <img src="../recursos-multimedia/outplacement-empresas/card-c-2.webp" alt="Profesional iniciando un camino hacia la independencia laboral">
                    </div>
                    <div class="ruta-body">
                        <h5>Hacia independencia laboral</h5>
                        <ul>
                            <li class="text-p3">Mi decisión de independencia</li>
                            <li class="text-p3">Las nuevas etapas de la ruta de independencia laboral</li>
                        </ul>
                    </div>
                </div>
                <!-- Tarjeta 3 -->
                <div class="ruta-card">
                    <div class="ruta-img">
                        <img src="../recursos-multimedia/outplacement-empresas/card-c-3.webp" alt="Personas planificando una jubilación activa y productiva">
                    </div>
                    <div class="ruta-body">
                        <h5>Hacia una jubilación productiva</h5>
                        <ul>
                            <li class="text-p3">Hacer que la transición de la jubilación sea exitosa</li>
                            <li class="text-p3">Contribución personal productiva y satisfacción desde el nuevo estatus</li>
                        </ul>
                    </div>
                </div>
                <!-- Tarjeta 4 -->
                <div class="ruta-card">
                    <div class="ruta-img">
                        <img src="../recursos-multimedia/outplacement-empresas/card-c-4.webp" alt="Procesos de desarrollo de carrera y liderazgo">
                    </div>
                    <div class="ruta-body">
                        <h5>Hacia el desarrollo de carrera</h5>
                        <ul>
                            <li class="text-p3">Autodesarrollo de carrera</li>
                            <li class="text-p3">Escuela de Management</li>
                            <li class="text-p3">Escuela de Talento 4.0</li>
                            <li class="text-p3">Coaching ejecutivo</li>
                            <li class="text-p3">Asimilación temprana del rol</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonios" hidden>
        <h2>Testimonios</h2>
        <div class="carousel">
            <div class="carousel-track">

                <div class="card-testimonio">
                    <img src="../recursos-multimedia/outplacement-empresas/testimonio-mario-jimenez.webp" alt="Testimonio">
                    <div class="name text-p3"><b>Mario Jimenez</b></div>
                    <p class="text-p4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>

                <div class="card-testimonio">
                    <img src="../recursos-multimedia/outplacement-empresas/testimonio-sofia-alvarez.webp" alt="Testimonio">
                    <div class="name text-p3"><b>Sofía Álvarez</b></div>
                    <p class="text-p4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>

                <div class="card-testimonio">
                    <img src="../recursos-multimedia/outplacement-empresas/testimonio-oscar-herrera.webp" alt="Testimonio">
                    <div class="name text-p3"><b>Oscar Herrera</b></div>
                    <p class="text-p4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>

                <div class="card-testimonio">
                    <img src="../recursos-multimedia/outplacement-empresas/testimonio-helena-gomez.webp" alt="Testimonio">
                    <div class="name text-p3"><b>Helena Gómez</b></div>
                    <p class="text-p4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>

                <div class="card-testimonio">
                    <img src="../recursos-multimedia/outplacement-empresas/testimonio-anonimo.webp" alt="Testimonio">
                    <div class="name text-p3"><b>Persona 5</b></div>
                    <p class="text-p4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>

                <div class="card-testimonio">
                    <img src="../recursos-multimedia/outplacement-empresas/testimonio-anonimo.webp" alt="Testimonio">
                    <div class="name text-p3"><b>Persona 6</b></div>
                    <p class="text-p4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>

            </div>
        </div>
        <!-- INDICADORES -->
        <div class="carousel-dots"></div>
    </section>

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
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="<?= asset_url('../js/carousel-testimonios.js') ?>"></script>
  </body>
</html>
