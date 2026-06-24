<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VK - Ioda</title>
    <link rel="icon" type="image/x-icon" href="../recursos-multimedia/logos/icon-vasquez-kennedy.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Hojas de Estilos -->
    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="stylesheet" href="../styles/ioda.css" />
    <!-- Fuente de texto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary pt-3 pb-3">
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
                    <a class="nav-link" href="../pages/eventos.php">Eventos</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <section class="hero-iqda">
        <div class="container-hero">

            <div class="hero-logo">
                <img src="../recursos-multimedia/logos/logo-ioda.webp" alt="IODA Analytics plataforma de análisis de datos para gestión del talento humano">
            </div>

            <div class="hero-text">
                <h3 style="margin-bottom:8px;">IODA - Servicios para las personas</h3>
                <p class="text-p3" style="margin-bottom:0px;">El mejor tablero de Power BI para Recursos Humanos.</p>
            </div>

        </div>
    </section>

    <section class="video-section">
        <div class="video-container">
            <div class="video-wrapper">
                <iframe 
                    src="https://www.youtube.com/embed/x91MPoITQ3I"
                    title="Video Conekta"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <section class="success-section">
        <div class="success-container">
            <div class="success-text">
                <h3>Lo que su empresa verá con PaaS:</h3>
                <ul>
                    <li class="text-p3">IODA permite centralizar información, optimizar procesos y tomar decisiones con en el uso inteligente de los datos de los empleados.</li>
                    <li class="text-p3">Plataforma de <i>People Analytics</i> para medir el desempeño, la cultura y el clima laboral en tiempo real.</li>
                    <li class="text-p3">IODA detecta variables de intención de renuncia, mide el compromiso y aplica estrategias efectivas de retención de talento clave.</li>
                    <li class="text-p3">El poder de la analítica de personas para identificar patrones, optimizar el desempeño y mejorar continuamente los planes de acción.</li>
                </ul>
            </div>

            <div class="success-image">
                <img src="../recursos-multimedia/ioda/mujer-trabajando.webp" alt="Profesional analizando datos de Recursos Humanos en computadora">
            </div>
        </div>
    </section>

    <section class="problemas-section">
        <div class="container">
            <div class="grid-problemas">
                <!-- Tarjeta -->
                <div class="card-problema">
                    <div class="card-img">
                        <img src="../recursos-multimedia/ioda/card-a-1.webp" alt="Recursos Humanos trabajando con herramientas digitales">
                    </div>
                    <div class="card-text">
                        <h5>Equipos de Recursos Humanos que necesitan automatizar tareas y procesos.</h5>
                        <p class="text-p4" style="margin-bottom: 0;">Herramientas tecnológicas ágiles para optimizar la gestión de Recursos Humanos.</p>
                    </div>
                </div>

                <!-- Tarjeta -->
                <div class="card-problema">
                    <div class="card-img">
                        <img src="../recursos-multimedia/ioda/card-a-2.webp" alt="Gestión centralizada de datos de colaboradores en plataforma digital">
                    </div>
                    <div class="card-text">
                        <h5>Falta de centralización de la información de colaboradores y ex colaboradores.</h5>
                        <p class="text-p4" style="margin-bottom: 0;">Dashboard centralizado con indicadores clave de desempeño, cultura y rotación.</p>
                    </div>
                </div>

                <!-- Tarjeta -->
                <div class="card-problema">
                    <div class="card-img">
                        <img src="../recursos-multimedia/ioda/card-a-3.webp" alt="Líder enfocado en fortalecer la retención de talento">
                    </div>
                    <div class="card-text">
                        <h5>Dificultades para retener talento clave a través de estrategias no salariales.</h5>
                        <p class="text-p4" style="margin-bottom: 0;">Control de la experiencia del colaborador y candidato, fortaleciendo la cultura y el compromiso laboral.</p>
                    </div>
                </div>

                <!-- Tarjeta -->
                <div class="card-problema">
                    <div class="card-img">
                        <img src="../recursos-multimedia/ioda/card-a-4.webp" alt="Análisis de datos de talento humano y cultura organizacional">
                    </div>
                    <div class="card-text">
                        <h5>Desarticulación en la forma de gestionar el talento y la cultura organizacional.</h5>
                        <p class="text-p4" style="margin-bottom: 0;">People Analytics predictivo que anticipa la fuga de talento y fortalece la retención. Evaluación de desempeño y clima organizacional con métricas precisas y comparativas en tiempo real.</p>
                    </div>
                </div>

                <!-- Tarjeta -->
                <div class="card-problema">
                    <div class="card-img">
                        <img src="../recursos-multimedia/ioda/card-a-5.webp" alt="Líder de equipo revisando indicadores de clima laboral">
                    </div>
                    <div class="card-text">
                        <h5>Ausencia de herramientas para acompañar a líderes en la gestión de sus equipos.</h5>
                        <p class="text-p4" style="margin-bottom: 0;">Encuestas y pulsos semanales automatizados para conocer el clima y la satisfacción de tu equipo.</p>
                    </div>
                </div>

                <div class="paas-logo">
                    <img src="../recursos-multimedia/logos/logo-paas-negativo.webp" alt="Logo plataforma PaaS para gestión del talento humano">
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
                    <img src="../recursos-multimedia/ioda/card-b-1.webp" alt="Análisis de datos de recursos humanos en dashboard analítico">
                </div>
                <p class ="text-p3" style="line-height: 1.6;">
                    <b>IODA</b> soluciona problemas de Recursos Humanos desde el análisis de los datos, la cuantificación del impacto y la acción.
                </p>
            </div>
            <!-- CARD 2 -->
            <div class="exito-card">
                <div class="icon">
                    <img src="../recursos-multimedia/ioda/card-b-2.webp" alt="Análisis predictivo de rotación y desempeño del talento humano">
                </div>
                <p class ="text-p3" style="line-height: 1.6;">
                    <b>IODA</b> identifica, explica y predice fenómenos dolorosos y costosos como la fuga de talento, la baja productividad y el bajo compromiso con la empresa. 
                </p>
            </div>
            <!-- CARD 3 -->
            <div class="exito-card">
                <div class="icon">
                    <img src="../recursos-multimedia/ioda/card-b-3.webp" alt="Plataforma digital segura para análisis de datos de recursos humanos">
                </div>
                <p class ="text-p3" style="line-height: 1.6;">
                    <b>IODA</b> es una plataforma científica, simple, innovadora, segura e integral. 
                </p>
            </div>

        </div>
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
  </body>

</html>