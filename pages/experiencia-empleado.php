<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VK - Experiencia del Empleado</title>
    <link rel="icon" type="image/x-icon" href="../recursos-multimedia/logos/icon-vasquez-kennedy.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Hojas de Estilos -->
    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="stylesheet" href="../styles/experiencia-empleado.css" />
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
                                <li><a class="dropdown-item" href="../pages/gestion-desempeno.php">Gestión del Desempeño</a></li>
                                <li><a class="dropdown-item active" href="../pages/experiencia-empleado.php">Experiencia del Empleado</a></li>
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
            <!-- Texto -->
            <div class="performance__content container-performance">
                <div class="performance__text">
                    <h3>EXPERIENCIA DEL EMPLEADO</h3>
                    <p class="text-p3" style = "margin-bottom: 20px;">
                        Cada empleado aumentando continuamente su compromiso con la empresa.
                    </p>
                    <p class="text-p3" style ="margin-bottom: 10px;"><b>Lo que en su empresa se verá con PaaS:</b></p>
                    <ul>
                        <li class="text-p3">Medimos continuamente la percepción y la vivencia de los empleados y la traducimos en información estratégica para la empresa.</li>
                        <li class="text-p3">Conocemos el eNPS en tiempo real: el grado en el que los empleados recomiendan a su empresa como un buen lugar para trabajar.</li>
                        <li class="text-p3">Conocemos la <i>intención de retiro</i> en tiempo real: el grado en que los empleados anhelan retirarse de la empresa, aunque no lo hagan.</li>
                        <li class="text-p3">Identificamos en tiempo real datos accionables para reducir la rotación externa y aumentar el compromiso de los empleados.</li>
                    </ul>
                </div>
            </div>
            <div class="performance__image">
                <video autoplay muted loop playsinline preload="auto">
                    <source src="../recursos-multimedia/experiencia-empleado/video-principal.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <section class="cards-section-gestion">
        <div class="cards-container-gestion">
            <div class="card-gestion">
                <img src="../recursos-multimedia/experiencia-empleado/card-1.webp" alt="Resultados de un entorno laboral positivo">
                <div class="card-gestion-body">
                    <h4>Muchos empleados se desempeñan bien, pero se quejan continuamente. <br>Con PaaS:</h4>

                    <div class="card-gestion-extra">
                        <ul>
                            <li class="text-p3">Cada empleado disfruta de un ambiente laboral adaptado a sus preferencias.</li>
                            <li class="text-p3">La empresa tiene un conocimiento cercano de la experiencia de cada uno como empleado.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card-gestion">
                <img src="../recursos-multimedia/experiencia-empleado/card-2.webp" alt="Líder satisfecho con el crecimiento y desarrollo de carrera de su equipo">
                <div class="card-gestion-body">
                    <h4>Muchos jefes no tienen conciencia sobre el impacto de su conducta en el ambiente de trabajo. <br>Con PaaS:</h4>

                    <div class="card-gestion-extra">
                        <ul>
                            <li class="text-p3">Los jefes dan una respuesta eficaz a las necesidades emocionales y psicológicas de sus empleados.</li>
                            <li class="text-p3">Los jefes comprenden las necesidades y expectativas de su equipo a cada momento. </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card-gestion">
                <img src="../recursos-multimedia/experiencia-empleado/card-3.webp" alt="Equipo de trabajo colaborando en un ambiente laboral positivo">
                <div class="card-gestion-body">
                    <h4>Muchas empresas hacen mediciones de clima laboral que cambian muy poco año a año. <br>Con PaaS:</h4>

                    <div class="card-gestion-extra">
                        <ul>
                            <li class="text-p3">Las empresas demuestran una reducción de la intención de retiro y del índice de rotación externa.</li>
                            <li class="text-p3">Demuestran un aumento del eNPS: índice de recomendación de la empresa como buen lugar para trabajar.</li>
                            <li class="text-p3">La empresa desarrolla capacidad de reacción inmediata a las perturbaciones del clima. </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero">
        <div class="hero-container">
            <div class="hero-text">
            <h4>
                ¿Sabes cuál es la diferencia entre medir clima laboral y gestionar la experiencia del empleado?
            </h4>
            <p>
                Muchas empresas creen que están haciendo lo mismo. Pero cuando entiendes realmente la diferencia, empiezan a aparecer respuestas a problemas que preocupan a cualquier organización: rotación, ausentismo o baja recomendación como empleador.
            </p>
            <p>
                En esta conversación, Camilo Vásquez, socio fundador de Vásquez Kennedy - Career Success entrevista a Gabriel Gustavo Santos Currea, especialista en experiencia del empleado, para entender cómo el análisis de lo que viven los empleados todos los días puede conectarse con los indicadores reales del negocio.
            </p>
            <p>
                Y en la última parte del video se aborda algo clave: qué indicadores de productividad pueden impactarse cuando una empresa empieza a gestionar realmente la experiencia del empleado.
            </p>
            <p>Vale la pena verlo completo:</p>
            </div>
            <div class="hero-image">
            <img src="../recursos-multimedia/experiencia-empleado/hero-img.webp" alt="Empleado satisfecho trabajando en un entorno laboral positivo">
            </div>

        </div>
    </section>

    <section class="video-section">
        <div class="video-container">
            <div class="video-wrapper">
                <iframe 
                    src="https://www.youtube.com/embed/Tb0eNo_IwSA"
                    title="Video Conekta"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    alt="Conversación sobre experiencia del empleado y su impacto en la productividad empresarial"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>

    <section class="success-section">
        <div class="success-container">
            <div class="success-text">
                <img 
                    src="../recursos-multimedia/logos/logo-ioda-negativo.webp" 
                    alt="Logo Conekta"
                    class="ioda-logo"
                >
                <h3>¿En qué nos basamos para ofrecerle altas probabilidades de éxito?</h3>
                <ul>
                    <li class="text-p3">Plataforma para la gestión del desarrollo de los empleados basada en datos.</li>
                    <li class="text-p3">Captura en tiempo real información sobre desempeño, motivación y expectativas.</li>
                    <li class="text-p3">Descubre patrones y correlaciones que permiten anticipar riesgos y oportunidades.</li>
                    <li class="text-p3">Entrega visibilidad continua sobre clima, experiencia, logro de resultados y desarrollo de competencias.</li>
                    <li class="text-p3">La empresa gana datos accionables para tomar mejores decisiones sobre su talento.</li>
                    <li class="text-p3">Aprendizaje en la gestión de la experiencia de más de 32.000 empleados de más de 100 empresas.</li>
                    <li class="text-p3">Tres décadas de experiencia apoyando a centenares de empresas comprometidas con el bienestar de los empleados.</li>
                </ul>
            </div>

            <div class="success-image">
                <img src="../recursos-multimedia/experiencia-empleado/grupo-celebrando.webp" alt="Equipo de empleados celebrando logros y resultados en la empresa">
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
