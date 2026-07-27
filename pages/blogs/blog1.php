<?php require_once dirname(__DIR__, 2) . '/cache-control.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VK - El nuevo poder del autodesarrollo</title>
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
                <li class="nav-item" hidden>
                    <a class="nav-link active" href="../eventos.php">Agora Abierta</a>
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
                <h1>EL NUEVO PODER DEL AUTODESARROLLO</h1>
                <p class="blog-subtitle text-p2">Nadie aprende si no quiere aprender.</p>
                <p class="blog-author text-p4">Por Camilo Vásquez Kennedy</p>
            </div>
        </section>

        <section class="blog-article-section">
            <article class="container blog-article">
                <p class="text-p3">Nadie aprende si no quiere aprender. Todo el que sepa lo que quiere y conozca sus recursos internos puede tener una carrera exitosa. Lo más valioso que la empresa puede hacer es ayudar a la gente a profundizar en el conocimiento más valioso de todos: el de sí mismo.</p>

                <p class="text-p3">Los profesionales de las áreas de Desarrollo Humano suelen vivir grandes frustraciones. Una de ellas es que estructuran programas muy bien fundamentados, pero no consiguen que a los empleados se interesen lo suficiente.</p>

                <p class="text-p3">Otra, que los empleados participen pero que sus comportamientos no cambien.</p>

                <p class="text-p3">Y una más, que los directivos de la empresa no valoren esta como una inversión importante para el negocio.</p>

                <p class="text-p3">Estos problemas se profundizan en la complejidad del conocimiento del mundo moderno y su cambio continuo. No parece pueda mantenerse centralizadas en unas áreas especializadas las decisiones sobre las personas. El Autodesarrollo es un concepto que se debe implantar.</p>

                <h2>Nadie aprende si no quiere aprender</h2>

                <p class="text-p3">El “autodesarrollo” de carrera es un desarrollo auto concebido y autodirigido por los empleados para el éxito en su trabajo.</p>

                <p class="text-p3">Nadie aprende si no quiere aprender. Nadie puede remplazar a una persona en la construcción de su éxito profesional. Todo el mundo puede tener una carrera exitosa siempre que sepa lo que quiere, cuáles son sus mejores recursos internos y cómo hacer un plan de carrera.</p>

                <p class="text-p3">Si se mira bien, al autodesarrollo es la única manera de que la gente en verdad progrese.</p>

                <p class="text-p3">Es un enfoque para gerenciar el desarrollo del talento en el que las empresas, antes que capacitar a su gente en habilidades técnicas, la capacitan sobre cómo conocerse más, cómo construir un plan de carrera y cómo hacerse cargo de él.</p>

                <p class="text-p3">Estas empresas valoran más las decisiones de carrera que toma cada persona, que los planes que hacen sobre ellas las áreas especializadas.</p>

                <p class="text-p3">El autodesarrollo de la gente se logra, primero, ayudando a cada uno a profundizar en el conocimiento de sus talentos, motivaciones y limitaciones y a clarificar su visión personal de éxito. Si la gente no se conoce, no sabe lo que quiere ni lo que tiene, no puede haber autodesarrollo. El desarrollo genuino de un empleado está profundamente articulado con su visión personal de éxito profesional.</p>

                <h2>El conocimiento más valioso de todos</h2>

                <p class="text-p3">A través de diversas prácticas de evaluación, de capacitación y de coaching, la empresa puede ayudar a la gente a profundizar en el conocimiento más valioso para todo el mundo: el de sí mismo.</p>

                <p class="text-p3">Cuando la gente amplía la comprensión de sus áreas de talento y de motivación, de su personalidad y de sus limitaciones internas, cuando clarifica su visión de éxito profesional y construye un plan de aprendizaje motivador y realista, se pone en condiciones superiores para lograr el éxito de su carrera.</p>

                <p class="text-p3">“Cuando una persona tiene un propósito significativo, el poder para tomar decisiones y los recursos para trabajar por ese propósito, no necesita discursos motivacionales ni metas desafiantes”, dice Frederic Laloux en su libro Reinventar las organizaciones, donde publicó una investigación profunda sobre empresas que funcionan dentro de estos esquemas.</p>

                <p class="text-p3">El segundo apoyo esencial para los empleados consiste en proveerles un método para la construcción de los planes para su autodesarrollo. Las personas no suelen saber cómo hacer para conducir su desarrollo profesional.</p>

                <p class="text-p3">Lo que sigue es la alienación de esas prioridades individuales con los planes de la empresa y con las exigencias de su rol, que debería incluir un ejercicio de discusión con los representantes apropiados de la empresa. Deberá asegurarse de que sus directivos estén debidamente capacitados en el arte de conversar con sus empleados sobre su desarrollo y facilitar acuerdos y apoyos organizacionales.</p>

                <h2>¿En qué empresas se puede hacer autodesarrollo?</h2>

                <p class="text-p3">El autodesarrollo se practica en empresas en donde se respira un ambiente de confianza y de responsabilidad. “Cuando las organizaciones se construyen (…) sobre estructuras y prácticas que engendran confianza y responsabilidad, comienzan a suceder cosas extraordinarias e inesperadas”, afirmó Laloux. Allí demostró que “hay empresas gobernadas por leyes diferentes y exitosas. La base principal es la confianza y la responsabilidad”. Y son exitosas y ningún empleado tiene interés en abandonarla.</p>

                <p class="text-p3">Las empresas que practican el autodesarrollo invierten en el progreso de su gente y asumen sin miedo el riesgo de hacerla más atractiva en el mercado laboral. Creen en la paradoja del desarrollo según la cual “toda persona que sienta que está prosperando profesionalmente en su empresa y haciéndose más empleable, tenderá a permanecer en ella”.</p>

                <p class="text-p3">El autodesarrollo se puede hacer en empresas que confían en la capacidad de sus empleados para autodirigirse y que respetan y apoyan su autonomía.</p>

                <p class="text-p3">Estas empresas no le programan actividades de capacitación o de coaching a los empleados, definidas por los especialistas desde la cima. Más bien, ponen a si alcance recursos para la autocapacitación mediante cursos, asesores y prácticas que cada persona puede escoger y usar.</p>

                <p class="text-p3">Necesariamente, son objetivas y transparentes en la oferta de vacantes para los empleados y equitativas en las decisiones. Alientan a las personas a que se postulen a las oportunidades internas y las capacitan continuamente para que sean eficaces eligiendo las postulaciones apropiadas. Siempre dan retroalimentación a los postulantes elegidos y no elegidos.</p>

                <p class="text-p3">Estas son empresas que reconocen que, como describe Laloux, “las personas con el poder para decidir por sí mismas tienen energía, potencial creativo y rumbo propios y no hay que decirles qué hacer”.</p>

                <h2>¿Qué no hacen las empresas donde hay autodesarrollo?</h2>

                <p class="text-p3">Las empresas coherentes con un enfoque de Autodesarrollo no tienen planes de carreras sobre los empleados, desconocidos por ellos. No programan actividades obligatorias de capacitación ni sancionan la no participación en ellas. Se basan menos en lo que dicen los especialistas sobre cada persona, que en lo que las mismas personas dicen. No tienen ningún tipo de favoritismo ni subjetividad en las decisiones sobre el personal. No dejan de mirar a profundidad cada vez que una persona decide dejar la compañía, porque una empresa donde la gente aprende y prospera es un sitio del que nadie se quiere ir.</p>

                <p class="text-p3">En resumen, el autodesarrollo de las personas en una empresa es la mejor forma de lograr procesos genuinos de desarrollo de los mejor del talento de cada individuo. Se fundamenta en el autoconocimiento y en la autodirección de los planes de desarrollo. La gente es capacitada para hacer planes para su desarrollo profesional y accede con equidad a oportunidades de capacitación, evaluación, coaching, promoción y retroalimentación.</p>

                <p class="text-p3">Vásquez Kennedy cuenta con la Guía de Autodesarrollo de Carrera, con la cual una persona profundiza en su autoconocimiento, establece sus prioridades de aprendizaje, las alinea con la empresa y construye su plan de acción.</p>

                <p class="text-p3">Este proceso suele ser acompañado por un coach y los resultados descritos se logran en cinco sesiones o menos. El desarrollo del plan se complementa con pruebas focales de evaluación de liderazgo 360°, pre y post, y con un catálogo de cursos de capacitación en línea, alrededor de las prioridades de desarrollo elegidas. La Guía se articula fluidamente con los demás recursos disponibles en la empresa para el desarrollo del talento.</p>
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
