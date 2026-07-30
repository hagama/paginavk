<?php require_once dirname(__DIR__, 2) . '/cache-control.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VK - Sexalescentes, una nueva generación</title>
<?php render_open_graph(); ?>
    <link rel="icon" type="image/x-icon" href="../../recursos-multimedia/logos/icon-vasquez-kennedy.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Hojas de Estilos -->
    <link rel="stylesheet" href="<?= asset_url('../../styles/global.css') ?>" />
    <link rel="stylesheet" href="<?= asset_url('../../styles/blog.css') ?>" />
    <!-- Fuente de texto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary pt-3 pb-3 sticky-top">
        <div class="container">
            <a class="navbar-brand" href="../../index.php">
                <img src="../../recursos-multimedia/logos/logo-vasquez-kennedy.webp" alt="Logo Vásquez-Kennedy" width="120" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto column-gap-3">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../quienes-somos.php">Quiénes Somos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle">Para Empresas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../outplacement-empresas.php">Outplacement</a></li>
                                <li><a class="dropdown-item" href="../desarrollo-carrera.php">Desarrollo de Carrera</a></li>
                                <li><a class="dropdown-item" href="../gestion-desempeno.php">Gestión del Desempeño</a></li>
                                <li><a class="dropdown-item" href="../experiencia-empleado.php">Experiencia del Empleado</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle">Para Personas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../outplacement-personas.php">Outplacement</a></li>
                                <li><a class="dropdown-item" href="../desarrollo-carrera-personas.php">Desarrollo de Carrera</a></li>
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
                    <a class="nav-link active" href="../eventos.php">Ágora Abierta</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="blog-hero">
            <div class="blog-hero-overlay"></div>
            <div class="container">
                <a class="blog-back text-p5" href="../eventos.php">
                    <i class="bi bi-arrow-left"></i>
                    Volver a Ágora abierta
                </a>
                <p class="blog-kicker text-p4">Blog</p>
                <h1>“SEXALESCENTES”, UNA NUEVA GENERACIÓN</h1>
                <p class="blog-subtitle text-p2">Los jubilados que no son viejos.</p>
                <p class="blog-author text-p4">Por Camilo Vásquez Kennedy</p>
            </div>
        </section>

        <section class="blog-article-section">
            <article class="container blog-article">
                <p class="text-p3">Se ha configurado una nueva generación: los “sexalescentes”, o sexagenarios adolescentes. Antes eran ancianos de 60 o más años de edad que hoy no son viejos y que lo que más desean es vivir en libertad y dependiendo de sus propias fuerzas.</p>

                <p class="text-p3">En 1960, la esperanza de vida en Colombia era de 57,6 años, y hoy es de 77,3; la edad de jubilación en 1960 era de 60 años para los hombres y 55 para las mujeres, y hoy de 62 y 57. La esperanza de vida ha aumentado 20 años en los últimos 60 años, y la de edad de jubilación solamente dos.</p>

                <p class="text-p3">Hoy hay más jubilados, que viven más tiempo en esa condición. Hace dos generaciones las personas con más de 60 años eran ancianos. Hoy puede decirse que son “sexalescentes”, sexagenarios adolescentes. Demográficamente esto es novedoso como la aparición, en su momento, del término “adolescente”, que también fue una franja social nueva que surgió a mediados del Siglo XX para denominar a los que anteriormente eran considerados unos “niños grandes”.</p>

                <p class="text-p3">La “sexalescencia” comprende a los adultos con una edad de 60, 70 y más años. Su manera de ser y su actitud es firme, constante, resuelta, llena de energía y vigor frente a la vida y sus contingencias. No piensan ni remotamente en la muerte. Han eliminado de su vocabulario las palabras “sexagenario”, “tercera edad” o “viejo” porque, sencillamente, no tienen entre sus planes la posibilidad de volverse un viejo abuelo o abuela.</p>

                <h2>Libertad y autonomía</h2>

                <p class="text-p3">Quizás lo que más desean es vivir en libertad y dependiendo de sus propias fuerzas, en su probablemente tranquila economía personal, y alcanzar todas las metas que aún siguen planificando. Un “sexalescente” típico se mantiene actualizado en las nuevas tecnologías, siente gran satisfacción por sentirse productivo, trabaja y puede que busque desarrollarse en aquellas áreas con la que siempre soñó.</p>

                <p class="text-p3">Quizás, este adulto ya pensionado busque una nueva forma de trabajar, en labores amables altamente satisfactorias, remuneradas o no. La “remuneración emocional” cuenta. Desarrollar un trabajo profesional competitivo remunerado, o unirse a voluntariados, o involucrarse en actividades grupales de educación, o darles rienda suelta a los sueños postergados, son opciones sobre la mesa. “Lo más importante es que el trabajo no plantee demasiadas exigencias físicas y haya una reducción en la intensidad horaria”, dice el Informe Mundial sobre el Envejecimiento y la Salud de la OMS.</p>

                <h2>Transición exitosa a la jubilación</h2>

                <p class="text-p3">Este cambio debería ser una transición productiva y saludable, para la que lo mejor es prepararse con toda la anticipación. Debe ser inaceptable ser invitado por la empresa al retiro por haber cumplido los requisitos para la pensión de jubilación, y no saber qué hacer en adelante con el tiempo ahora totalmente disponible.</p>

                <p class="text-p3">Las personas y las empresas tienen la “obligación” de planear esta transición, y adoptar programas de preparación a la jubilación donde el foco principal sea la exploración de las mejores opciones para desarrollar una vida activa como persona jubilada. Dejar de trabajar, además, puede afectar seriamente la salud. Dawn C. Carr, del Centro de la Longevidad de Stanford, Estados Unidos, dice que “se ha observado que hay una disminución impresionante en el rendimiento cognitivo, que va de la mano con la jubilación, porque cuando dejamos de participar en tareas complejas, el cerebro se empieza a dañar”. En un foro sobre alzhéimer realizado en la Clínica Mayo en Miami, se señaló que, “para evitar el deterioro cognoscitivo, lo principal es seguir usando el cerebro en labores que exijan pensamiento complejo”. La evidencia científica muestra que seguir trabajando genera un beneficio emocional, debido al reto intelectual y a las relaciones sociales.</p>

                <p class="text-p3">Como es poco probable conseguir un nuevo empleo de tiempo completo, como si nada hubiera pasado, las formas de trabajo independiente merecen ser exploradas. Allí el próximo jubilado se enfrenta a los temores y las creencias limitantes alrededor de la independencia laboral, que a veces paralizan. Pero los tiempos modernos han multiplicado las opciones para la prestación de servicios profesionales bajo modalidades novedosas como los “Interim Managers” -gerentes que se vinculan a una empresa para liderar proyectos específicos por tiempo definido y con jornadas parciales-, o la provisión de servicios tercerizados, o el servicio en juntas directivas o la consultoría profesional, y muchas otras.</p>

                <p class="text-p3">Para casi todas ellas es posible prepararse. El nuevo jubilado probablemente no tenga que inventarse nada nuevo sino armar una buena propuesta para el entorno, basada en los conocimientos, habilidades y experiencias de una vida de trabajo, empacada ahora de manera diferente. Prepararse a tiempo puede hacer que esta última etapa de la vida sea lo que debe ser: un verdadero júbilo.</p>
            </article>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-logo-box">
                <img src="../../recursos-multimedia/logos/logo-vasquez-kennedy-negativo.webp" class="footer-logo" alt="Logo negativo de Vásquez Kennedy consultora de desarrollo de carrera y outplacement">
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
                <div class="footer-col">
                    <h6><b>Para empresas</b></h6>
                    <p class="text-p5">
                        <a href="../outplacement-empresas.php">Outplacement</a>
                    </p>
                    <p class="text-p5">
                        <a href="../desarrollo-carrera.php">Desarrollo de Carrera</a>
                    </p>
                    <p class="text-p5">
                        <a href="../gestion-desempeno.php">Gestión del Desempeño</a>
                    </p>
                    <p class="text-p5">
                        <a href="../experiencia-empleado.php">Experiencia del Empleado</a>
                    </p>
                    <br>
                    <h6><b>Para Personas</b></h6>
                    <p class="text-p5">
                        <a href="../outplacement-personas.php">Outplacement</a>
                    </p>
                    <p class="text-p5">
                        <a href="../desarrollo-carrera-personas.php">Desarrollo de Carrera</a>
                    </p>
                </div>
                <div class="footer-col">
                    <h6><b>Políticas de privacidad</b></h6>
                    <p class="text-p5">
                        <a href="#">Consulta nuestras políticas de privacidad</a>
                    </p>
                    <h6 class="mt-4"><b>Redes sociales</b></h6>
                    <div class="redes">
                        <a href="https://www.facebook.com/vasquezkennedy/" target="_blank">
                            <img src="../../recursos-multimedia/logos/icon-facebook.webp" alt="Vásquez Kennedy en Facebook">
                        </a>
                        <a href="https://www.linkedin.com/company/vasquez-kennedy-outplacement-desarrollo-carrera-independencia-laboral-reestructuraciones/" target="_blank">
                            <img src="../../recursos-multimedia/logos/icon-linked-in.webp" alt="Vásquez Kennedy en LinkedIn">
                        </a>
                        <a href="https://www.youtube.com/@vasquezkennedy9585" target="_blank">
                            <img src="../../recursos-multimedia/logos/icon-youtube.webp" alt="Canal de YouTube de Vásquez Kennedy">
                        </a>
                        <a href="https://www.instagram.com/vasquezkennedycol/" target="_blank">
                            <img src="../../recursos-multimedia/logos/icon-instagram.webp" alt="Vásquez Kennedy en Instagram">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="https://wa.link/s3ece3" target="_blank" class="whatsapp-float">
        <img src="../../recursos-multimedia/logos/icon-whatsapp-color.webp" alt="Contactar a Vásquez Kennedy por WhatsApp">
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
