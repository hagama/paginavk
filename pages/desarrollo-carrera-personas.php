<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VK - Desarrollo de Carrera</title>
    <link rel="icon" type="image/x-icon" href="../recursos-multimedia/logos/icon-vasquez-kennedy.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Hojas de Estilos -->
    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="stylesheet" href="../styles/desarrollo-carrera-personas.css" />
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
                            <a class="dropdown-item dropdown-toggle">Para Empresas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../pages/outplacement-empresas.php">Outplacement</a></li>
                                <li><a class="dropdown-item" href="../pages/desarrollo-carrera.php">Desarrollo de Carrera</a></li>
                                <li><a class="dropdown-item" href="../pages/gestion-desempeno.php">Gestión del Desempeño</a></li>
                                <li><a class="dropdown-item" href="../pages/experiencia-empleado.php">Experiencia del Empleado</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle active">Para Personas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../pages/outplacement-personas.php">Outplacement</a></li>
                                <li><a class="dropdown-item active" href="../pages/desarrollo-carrera-personas.php">Desarrollo de Carrera</a></li>
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

    <section class="performance">
        <div class="performance__wrapper">
            <!-- Texto -->
            <div class="performance__content container-performance">
                <div class="performance__text">
                    <h3 style = "margin-bottom: 0px;">DESARROLLO DE CARRERA</h3>
                    <p class="text-p3 subtitle" style = "margin-top: 0px; margin-bottom: 20px;">
                        (para particulares)
                    </p>
                    <p class="text-p3" style = "margin-bottom: 10px;">
                        Muchos profesionales no conocen con claridad dónde está su mejor potencial de desarrollo. Con los programas de desarrollo de carrera de VK: 
                    </p>
                    <ul>
                        <li class="text-p3">Comenzarás un nuevo camino de progreso profesional a partir del conocimiento a profundidad de ti mismo.</li>
                        <li class="text-p3">Crearás nuevas metas estimulantes, basadas en el desarrollo de tus talentos claves.</li>
                        <li class="text-p3">Tomarás decisiones valientes para que tu trabajo te haga más feliz.</li>
                        <li class="text-p3">Harás tu propio plan de desarrollo profesional para comenzar de inmediato.</li>
                        <li class="text-p3">Definirás tus prioridades de aprendizaje a partir de una nueva visión de éxito profesional.</li>
                        <li class="text-p3">Subirás de nivel en las destrezas claves mediante tecnología educativa y el apoyo de especialistas.</li>
                    </ul>
                </div>
            </div>
            <div class="performance__image">
                <video autoplay muted loop playsinline preload="auto">
                    <source src="../recursos-multimedia/desarrollo-carrera-personas/video-principal.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    
    <section class="problemas-section">
        <div class="container">
            <div class="grid-problemas">
                <!-- Tarjeta -->
                <div class="card-problema">
                    <div class="card-img">
                        <img src="../recursos-multimedia/desarrollo-carrera-personas/card-a-1.webp"  alt="Gestión centralizada de datos en plataforma digital">
                    </div>
                    <div class="card-text">
                        <p class="text-p3" style="margin-bottom: 0;"><b>Nuestra metodología: </b>Vásquez Kennedy te ofrece una combinación de canales de aprendizaje profundamente transformadora.</p>
                        <ul>
                            <li class="text-p3">Nos basamos en nuestras propias plataformas de aprendizaje y de gestión del desarrollo de los empleados.</li>
                            <li class="text-p3">Contamos con herramientas tecnológicas exclusivas para la medición pre y post de los aprendizajes.</li>
                            <li class="text-p3">Nuestra metodología es comprobada, trascendente e impecable en su fondo y en su forma.</li>
                        </ul>
                    </div>
                </div>

                <!-- Tarjeta -->
                <div class="card-problema">
                    <div class="card-img">
                        <img src="../recursos-multimedia/desarrollo-carrera-personas/card-a-2.webp" alt="Profesionales en reunión de negocios analizando información y tomando decisiones estratégicas">
                    </div>
                    <div class="card-text">
                        <p class="text-p3" style="margin-bottom: 0;"><b>Guías de desarrollo de Vásquez Kennedy:</b></p>
                        <ul>
                            <li class="text-p3">Metodología única en el mercado para definir prioridades de aprendizaje a partir del autoconocimiento y construir el plan para su desarrollo.</li>
                            <li class="text-p3">El área de Desarrollo Humano de tu empresa no tendrá que decirte en qué te debes desarrollar, tú se los dirás.</li>
                            <li class="text-p3">5 sesiones de coaching con nuestras Guías de Autodesarrollo bastan para que definas tus prioridades de aprendizaje y tu plan de acción.</li>
                        </ul>
                    </div>
                </div>

                <!-- Tarjeta -->
                <div class="card-problema">
                    <div class="card-img">
                        <img src="../recursos-multimedia/desarrollo-carrera-personas/card-a-3.webp" alt="Manos sosteniendo engranajes digitales que representan las áreas de aprendizaje con Vásquez-Kennedy">
                    </div>
                    <div class="card-text">
                        <p class="text-p3" style="margin-bottom: 0;"><b>Escuela de <i>management</i>:</b> Cursos blended learning que combinan tecnología educativa e IA con el apoyo de especialistas, para aprender el doble en la mitad del tiempo, en estas áreas:</p>
                        <ul>
                            <li class="text-p3">Crear una visión.</li>
                            <li class="text-p3">Ser inspirador.</li>
                            <li class="text-p3">Lograr resultados.</li>
                            <li class="text-p3">Ser eficiente.</li>
                            <li class="text-p3">Crear sinergias.</li>
                            <li class="text-p3">Desarrollar equipos efectivos.</li>
                        </ul>
                    </div>
                </div>

                <!-- Tarjeta -->
                <div class="card-problema">
                    <div class="card-img">
                        <img src="../recursos-multimedia/desarrollo-carrera-personas/card-a-4.webp" alt="Líder enfocado en fortalecer el talento humano">
                    </div>
                    <div class="card-text">
                        <p class="text-p3" style="margin-bottom: 0;">
                            <b>Coaching ejecutivo: </b>
                            <br>
                            Un equipo estelar de coaches sénior con certificaciones internacionales y una metodología altamente estructurada.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="success-section-1">
        <div class="success-container-1">
            <div class="success-text-1">
                <img 
                    src="../recursos-multimedia/logos/logo-conekta-negativo.webp" 
                    alt="Logo Conekta"
                    class="conekta-logo"
                >
                <ul>
                    <li class="text-p3">Plataforma exclusiva que combina tecnología educativa, IA y el apoyo de especialistas.</li>
                    <li class="text-p3">La herramienta de aprendizaje para el desarrollo humano más avanzada en el mercado.</li>
                    <li class="text-p3">Programas de capacitación trascendentes, accesibles e impecables.</li>
                    <li class="text-p3">Tecnología educativa avanzada apoyada en IA.</li>
                    <li class="text-p3">Variedad de recursos interactivos de capacitación.</li>
                    <li class="text-p3">Desarrollo de contenidos por los mejores especialistas.</li>
                </ul>
            </div>
            <div class="success-image-1">
                <img src="../recursos-multimedia/desarrollo-carrera-personas/success-1-img.webp" alt="Líder de equipo revisando indicadores de clima laboral">
            </div>
        </div>
    </section>

    <section class="success-section-2">
        <div class="success-container-2">
            <div class="success-image-2">
                <img src="../recursos-multimedia/desarrollo-carrera-personas/success-2-img.webp" alt="Líder de equipo revisando indicadores de clima laboral">
            </div>
            <div class="success-text-2">
                <img 
                    src="../recursos-multimedia/logos/logo-ioda-negativo.webp" 
                    alt="Logo Conekta"
                    class="ioda-logo"
                >
                <h3>¿En qué nos basamos para ofrecerle altas probabilidades de éxito?</h3>
                <ul>
                    <li class="text-p3">Tres décadas de experiencia sirviendo al éxito de la carrera de más de 15.000 gerentes y profesionales.</li>
                    <li class="text-p3">Tecnología avanzada con IA para el desarrollo e los empleados.</li>
                    <li class="text-p3">Un equipo humano HUMANO.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="video-section">
        <div class="video-container">
            <h3>Testimonios</h3>
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