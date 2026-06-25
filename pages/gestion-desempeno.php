<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VK - Gestión del Desempeño</title>
    <link rel="icon" type="image/x-icon" href="../recursos-multimedia/logos/icon-vasquez-kennedy.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Hojas de Estilos -->
    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="stylesheet" href="../styles/gestion-desempeno.css" />
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
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle active">Para Empresas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../pages/outplacement-empresas.php">Outplacement</a></li>
                                <li><a class="dropdown-item" href="../pages/desarrollo-carrera.php">Desarrollo de Carrera</a></li>
                                <li><a class="dropdown-item active" href="../pages/gestion-desempeno.php">Gestión del Desempeño</a></li>
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
                    <a class="nav-link" href="../pages/eventos.php">Agora Abierta</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <section class="performance">
        <div class="performance__wrapper">

            <!-- Imagen (full izquierda) -->
            <div class="performance__image">
                <video autoplay muted loop playsinline preload="auto">
                    <source src="../recursos-multimedia/gestion-desempeno/video-principal.mp4" type="video/mp4">
                </video>
            </div>

            <!-- Texto -->
            <div class="performance__content container-performance">
                <div class="performance__text">
                    <h3>GESTIÓN DEL DESEMPEÑO</h3>
                    <p class="text-p3" style = "margin-bottom: 20px;">
                    Cada empleado conoce y mide sus resultados claves.
                    </p>
                    <p class="text-p3" style ="margin-bottom: 10px;"><b>Lo que en su empresa se verá con PaaS:</b></p>
                    <ul>
                        <li class="text-p3">El avance de cada empleado en sus logros claves medido en tiempo real.</li>
                        <li class="text-p3">Plan para fortalecer las competencias críticas de cada empleado.</li>
                        <li class="text-p3">Cada empleado calibrado en su desempeño y su potencial de desarrollo.</li>
                        <li class="text-p3">Sin grandes inversiones ni largas esperas, lo implementamos en su empresa desde mañana mismo.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cards-section-gestion">
        <div class="cards-container-gestion">
            <div class="card-gestion">
                <img src="../recursos-multimedia/gestion-desempeno/card-a-1.webp" alt="Profesional trabajando en el seguimiento de objetivos y desarrollo del talento">
                <div class="card-gestion-body">
                    <h4>Muchas veces los empleados no saben qué se espera de ellos ni cómo crecer. <br>Con PaaS:</h4>
                    <div class="card-gestion-extra">
                        <ul>
                            <li class="text-p3">Definimos juntos con cada uno los resultados clave de su rol, alineados con los de su área de trabajo.</li>
                            <li class="text-p3">Construimos con cada uno un plan de fortalecimiento de las competecias claves, a la medida.</li>
                            <li class="text-p3">Acompañamos a cada uno hasta el logro de sus metas.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card-gestion">
                <img src="../recursos-multimedia/gestion-desempeno/card-a-2.webp"alt="Líder analizando indicadores de desempeño y productividad del equipo">
                <div class="card-gestion-body">
                    <h4>Los líderes no siempre tienen herramientas para dar feedback. <br>Con PaaS:</h4>
                    <div class="card-gestion-extra">
                        <ul>
                            <li class="text-p3">Los formamos como facilitadores del desarrollo de su gente.</li>
                            <li class="text-p3">Los acompañamos en la gestión del desempeño con soporte experto.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card-gestion">
                <img src="../recursos-multimedia/gestion-desempeno/card-a-3.webp" alt="Profesional revisando resultados y desempeño laboral">
                <div class="card-gestion-body">
                    <h4>Las organizaciones pierden control sin un sistema integral. <br>Con PaaS:</h4>

                    <div class="card-gestion-extra">
                        <ul>
                            <li class="text-p3">Implementamos un sistema alineado a la estrategia del negocio.</li>
                            <li class="text-p3">Administramos los resultados de desempeño de forma continua y objetiva.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cards-info">
        <div class="cards-info-header">
            <p class="text-p3">
                En <b>Vásquez Kennedy</b> nos hacemos cargo de mejorar la productividad y el compromiso de cada empleado. <b>PaaS</b> es un modelo delegado de servicio para gerenciar integralmente el desarrollo de cada empleado, medir y mejorar su productividad y su compromiso con la empresa.
            </p>
            <p class="text-p3">
                <b>PaaS</b> permite acceder a expertos y a tecnología de última generación con inteligencia artificial y <i>people analytics</i> desde el día cero y sin hacer inversiones adicionales.
            </p>
        </div>
        <div class="cards-info-container">
            <!-- CARD -->
            <div class="card-info" style="background-color: var(--color-secundario)">
                <div class="card-info-img">
                    <img src="../recursos-multimedia/gestion-desempeno/card-b-1.webp" alt="Impacto del desarrollo de empleados en la productividad y resultados empresariales">

                    <!-- overlay -->
                    <div class="overlay"></div>
                </div>

                <div class="card-info-body">
                    <h4>¿En su empresa, no son  claros los indicadores de resultados claves el negocio y de cada área?</h4>
                    <p class="text-p3" style ="margin-top: 15px; margin-bottom: 0;">Eso no tiene por qué ser un problema sino todo lo contrario; es la oportunidad para definir a todos el horizante de manera muy práctica.  <br><b>Con PaaS:</b></p>
                    <ul>
                        <li class="text-p3" style ="margin-top: 0px;">Los líderes se capacitan en el método de construcción de OKRs, objetivos claves de resultados.  </li>
                        <li class="text-p3" style ="margin-top: 15px;">Definen los OKRs de la empresa y de sus áreas principales y en una única reunión de trabajo los acuerdan.</li>
                    </ul>
                </div>
            </div>

            <!-- CARD -->
            <div class="card-info" style="background-color: var(--color-principal)">
                <div class="card-info-img">
                    <img src="../recursos-multimedia/gestion-desempeno/card-b-2.webp" alt="Fortalecer el talento humano para mejorar la gestión del desempeño">
                    <div class="overlay"></div>
                </div>

                <div class="card-info-body">
                    <h4>¿En qué nos basamos para ofrederle altas probabilidades de éxito?</h4>
                    <img
                        src="../recursos-multimedia/logos/logo-ioda-negativo.webp"
                        alt="IODA Analytics plataforma de análisis de datos para gestión del talento humano"
                        class="card-info-feedback-img"
                    >
                    <ul>
                        <li class="text-p3" style ="margin-top: 15px;">IODA: tecnología avanzada con IA para People Analytics: el uso inteligente de los datos sobre cada empleado.</li>
                        <li class="text-p3" style ="margin-top: 15px;">Metodología estructurada basada en tres décadas de experiencia acompañando el desarrollo de carrera de más de 15.000 profesionales y gerentes.</li>
                    </ul>
                </div>
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
