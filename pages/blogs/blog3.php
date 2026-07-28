<?php require_once dirname(__DIR__, 2) . '/cache-control.php'; ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VK - Marca personal conquistadora</title>
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
                <h1>CÓMO ES UNA “MARCA PERSONAL CONQUISTADORA”</h1>
                <p class="blog-subtitle text-p2">Ni imagen sin sustento, ni trabajo sin proyección de la imagen personal.</p>
            </div>
        </section>

        <section class="blog-article-section">
            <article class="container blog-article">
                <p class="text-p3">Ni imagen sin sustento, ni trabajo sin proyección de la imagen personal. La imagen es demasiado importante como para dejarla suelta. La marca personal comunica sus atributos personales reales, relevantes y distintivos. Los mensajes cortos son más eficaces que los largos.</p>

                <p class="text-p3">La clásica y popular definición de Jeff Bezos, director ejecutivo de Amazon, dice que “la marca personal es lo que dicen de ti cuando no estás en la sala”.</p>

                <p class="text-p3">El fin último de su marca personal es que usted se convierta en la opción preferente en un proceso de selección de un ejecutivo, de un aliado, de un socio, de un proveedor, etc. y se ponga de primero en la fila.</p>

                <p class="text-p3">Muchos piensan que los conceptos como imagen, reputación o marca personal son superficiales, que hablan solo de lo “exterior”, de la cáscara y no de la sustancia. Que promover la imagen es propio de los superficiales y los zalameros. Y, en cierto grado, es verdad.</p>

                <p class="text-p3">Otros piensan, en cambio, que la imagen es sólida cuando está respaldada por la realidad, que los hechos hablan por sí solos y que de la reputación se encargan las realizaciones personales. Y eso, también, es verdad.</p>

                <p class="text-p3">Ambas cosas son ciertas, pero no excluyentes. Son verdaderamente valiosas cuando están juntas. Ni imagen sin sustento, ni trabajo sin proyección de la imagen personal. La imagen es demasiado importante como para dejarla suelta. La imagen le antecede y le abre o le cierra puertas, aún antes de que usted empiece siquiera a moverse.</p>

                <p class="text-p3">Más que unos atributos personales “inventados para comunicarlos”, la marca personal comunica sus atributos personales reales, relevantes y distintivos, para un mercado definido.</p>

                <h2>Primero: ¿quién es usted? ¿Qué busca?</h2>

                <p class="text-p3">Es muy importante revisar qué es el éxito para usted. El éxito es en esencia un asunto individual que suele estar determinado, equivocadamente, por un criterio social. Con frecuencia nos sorprendemos a nosotros mismos persiguiendo fórmulas de éxito prestadas, que en realidad no son nuestras.</p>

                <p class="text-p3">Hay personas que dejan de disfrutar su trabajo cuando se convierten en jefes y adquieren mando sobre otros; otras, cuando aceptan un trabajo con mejor sueldo, aunque sea en áreas que no son de su interés y abandonan elementos de su labor diaria que son fuentes genuinas de felicidad.</p>

                <p class="text-p3">El trabajo exitoso, si no da felicidad, no es exitoso. ¿Qué es un trabajo exitoso para usted? ¿Dónde usted logra qué, donde disfruta qué, donde le da sentido a qué, donde se le pasa el tiempo sin percatarse haciendo qué? El trabajo que se disfruta cada día, donde se siente útil, donde el tiempo se pasa volando, donde usa lo mejor que tiene en usted y lo goza, es el trabajo correcto para usted. Nadie debería dejar de pensar en los trabajos que lo harán más feliz. Todo el mundo puede tener el trabajo correcto para cada uno.</p>

                <p class="text-p3">Dice Deepak Chopra: “tener éxito es vivir la vida como uno realmente la quiere vivir”.</p>

                <h2>¿Qué lo hace a usted especial?</h2>

                <p class="text-p3">Hoy se sabe que las personas más exitosas no necesariamente son las que tienen más capacidades, sino las que tienen más desarrolladas unas pocas capacidades. Es muy probable que ese sea su caso.</p>

                <p class="text-p3">Me explico: la evidencia indica que los profesionales y los ejecutivos más admirados por los demás son, por lo general, personas con unas pocas capacidades extraordinariamente desarrolladas, incluso aunque en muchas otras tengan un desempeño pobre. ¿Cuáles son esas pocas fortalezas claves suyas?</p>

                <p class="text-p3">Hace varias décadas, Peter Drucker llamó la atención al respecto y propuso el concepto “desarrollo basado en fortalezas”. Indicó que tiene más sentido concentrarse en ser extraordinariamente bueno en algo, que bueno en mucho. Si uno se concentra en desarrollar al máximo unas pocas capacidades, podrá cumplir sus sueños de éxito más retadores. Pero si su foco es desarrollar sus debilidades en lugar de sus fortalezas, “quizás consiga pasar de incompetente a mediocre…”, en palabras de Drucker.</p>

                <p class="text-p3">Eso es lo que la evidencia ha podido demostrar mediante mediciones del desarrollo de competencias de personas con niveles diferentes de éxito: los mejores son extraordinariamente buenos en pocas cosas.</p>

                <p class="text-p3">Si usted puede decir algo como: “estructuro proyectos complejos y los llevo a término cumpliendo siempre plazos y presupuestos…” o, “puedo formar equipos de ventas campeones que sobrepasan las metas más ambiciosas…”. Las demás cualidades suyas, como ser una persona trabajadora, colaboradora, orientada a resultados, hábil con los números, diestra con los programas de Office, puntual, cumplida… etc., etc. … son superfluas en su marca personal porque son propias de -literalmente- millones de personas a su alrededor.</p>

                <p class="text-p3">¿Qué es especial en usted? ¿Cuál es su terreno profesional? ¿Qué desafíos son los que usted quiere enfrentar? ¿Qué es lo que mejor sabe hacer? ¿Con qué talentos y capacidades cuenta? ¿Cuándo las cosas le fluyen y le salen bien? ¿Qué lo hace diferente?</p>

                <p class="text-p3">No se preocupe por encontrar muchas respuestas. Incluso una sola podría bastar y ser el fundamento de una marca personal conquistadora.</p>

                <h2>¿En dónde será usted más atractivo?</h2>

                <p class="text-p3">Y, finalmente: ¿dónde quiere lograr sus objetivos? ¿Cuál es el mercado apropiado para usted? ¿Dónde es más atractivo e interesante su perfil? ¿Dónde pueden tener mayor valor sus capacidades y habilidades? ¿Cómo se va a dar a conocer en ese mercado de su interés? Su marca personal tiene un valor mayor y diferente en unos mercados que en otros.</p>

                <p class="text-p3">Todos tenemos un mercado, y pocos profesionales son interesantes para todos los mercados. Usted con seguridad se desenvuelve mejor en ciertos tamaños de empresas, de determinados sectores económicos y de atributos culturales importantes para usted. Hábleles a ellas.</p>

                <p class="text-p3">Tan importante como tener una buena definición de sí mismo y una impecable presentación en su hoja de vida y en las redes sociales, es tener muy bien identificado y definido su mercado objetivo.</p>

                <h2>¿Cómo presentar la marca personal?</h2>

                <p class="text-p3">El filósofo y matemático francés Blaise Pascal, del siglo XVII, dijo una frase muy célebre en una carta que escribió a un amigo, que viene muy bien a colación: “He hecho una carta más larga de lo usual porque no he tenido tiempo para hacer una carta corta”. Este es un buen mensaje para los latinos, acostumbrados a decir más para mostrar que sabemos más, aunque las verdades contundentes se suelen expresar en frases cortas. Los mensajes cortos son más eficaces que los largos.</p>

                <p class="text-p3">Un ejemplo de una buena expresión de una marca personal puede ser este:</p>

                <p class="text-p3">“Soy un profesional con habilidades sólidas para liderar los diferentes procesos de la cadena de abastecimiento: producción, calidad, logística e innovación, en la industria farmacéutica, cosmética y de servicios logísticos. Mis mayores fortalezas incluyen el liderazgo de proyectos en donde se requiera una alta dosis de innovación, creatividad y efectividad.”</p>

                <p class="text-p3">Necesita decirlo en su presentación en LinkedIn, al encabezar su hoja de vida, al hablar de usted en sus comunicaciones, al presentarse ante terceros. Y probablemente no tenga que decir mucho más. Todo lo adicional que diga sobre usted, siempre que sea demostrable, no será más que un refuerzo y un adorno a su marca personal.</p>

                <p class="text-p3">Pensar en el efecto conquistador de su marca personal le hará convencerse del valor que usted tiene y para quién y le hará muy sencillo comunicarlo y convencer.</p>
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
