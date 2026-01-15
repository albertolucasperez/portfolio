<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X40FKCQTN5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-X40FKCQTN5');
    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="https://albertolucasperez.com/images/writing/ejemplo-post/cover.png">
    <meta name="description" content="Este es un post de ejemplo para mostrar cómo funcionará tu blog.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/post.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <title>Título del Post - Alberto Lucas</title>
</head>

<body>
    <header>
        <div id="navbar">
            <a id="logo" href="../index.html">
                <p>Alberto Lucas</p>
            </a>
            <nav>
                <a class="navlink" href="../work.php">Work</a>
                <a class="navlink-current" href="../writing.php">Writing</a>
                <a class="navlink" target="_blank" href="../Alberto Lucas.pdf">Resume</a>
                <a class="navlink" target="_blank" href="https://www.linkedin.com/in/alberto-lucas-perez/">Linkedin</a>
                <a class="navlink" href="mailto:albertolucasperez@gmail.com">Email</a>
                <label id="contact-button-mobile" for="mobile-menu-toggle">Menu</label>
            </nav>
        </div>
        <input type="checkbox" id="mobile-menu-toggle" class="check">
        <div id="mobile-navbar">
            <a class="navlink-mobile" href="../work.php">Work</a>
            <a class="navlink-mobile" href="../writing.php">Writing</a>
            <a class="navlink-mobile" href="../Alberto Lucas.pdf">Resume</a>
            <a class="navlink-mobile" target="_blank"
                href="https://www.linkedin.com/in/alberto-lucas-perez/">Linkedin</a>
            <a class="navlink-mobile" href="mailto:albertolucasperez@gmail.com">Email</a>
            <label id="contact-button-close" for="mobile-menu-toggle" aria-label="Close menu">×</label>
        </div>
    </header>

    <main>
        <section id="back-to-writing">
            <a href="../writing.php" class="paragraph-r-s">Back to Writing</a>
        </section>

        <section id="post-header">
            <div id="post-meta">
                <time class="paragraph-r-xxs light-grey">January 15, 2026</time>
            </div>
            <h1 class="title-l">Título de tu Post de Ejemplo</h1>
        </section>

        <section id="post-content">
            <div class="post-section">
                <p class="paragraph-m-s">
                    Este es un post de ejemplo para mostrarte cómo funcionará tu nueva sección de blog. Aquí puedes
                    escribir tus pensamientos sobre diseño, liderazgo y productos.
                </p>
                <p class="paragraph-m-s">
                    El contenido del post será fácilmente personalizable. Puedes agregar párrafos, encabezados,
                    listas, imágenes y citas de forma sencilla.
                </p>
            </div>

            <div class="post-section">
                <h2 class="title-m dark-grey">Una sección con título</h2>
                <p class="paragraph-m-s">
                    Puedes organizar tu contenido en secciones con títulos. Esto hace que sea más fácil de leer
                    y navegar para tus visitantes.
                </p>

                <h3 class="paragraph-m-m dark-grey">Subtítulo</h3>
                <p class="paragraph-m-s">
                    También puedes agregar subtítulos para dividir el contenido en partes más pequeñas.
                </p>
            </div>

            <div class="post-section">
                <h2 class="title-m dark-grey">Listas</h2>
                <p class="paragraph-m-s">
                    Puedes incluir listas con puntos:
                </p>
                <ul class="paragraph-m-s">
                    <li>Primer punto importante</li>
                    <li>Segundo punto importante</li>
                    <li>Tercer punto importante</li>
                </ul>

                <p class="paragraph-m-s">
                    O listas numeradas:
                </p>
                <ol class="paragraph-m-s">
                    <li>Primer paso</li>
                    <li>Segundo paso</li>
                    <li>Tercer paso</li>
                </ol>
            </div>

            <div class="post-section">
                <blockquote>
                    También puedes agregar citas o fragmentos destacados que quieras resaltar. Estos aparecerán
                    con un estilo especial para llamar la atención.
                </blockquote>
            </div>

            <div class="post-section">
                <h2 class="title-m dark-grey">Conclusión</h2>
                <p class="paragraph-m-s">
                    Esta es la estructura base para tus posts. Cuando agregues tus propios posts de LinkedIn,
                    simplemente copia este archivo, cambia el contenido y las imágenes, y estará listo.
                </p>
                <p class="paragraph-m-s">
                    Cada post tendrá su propia URL limpia como <span class="blue">albertolucasperez.com/writing/nombre-del-post</span>
                </p>
            </div>
        </section>
    </main>

    <footer>
        <div class="copyright">
            <p class="paragraph-r-s light-grey">© 2026 Alberto Lucas</p>
            <a class="paragraph-r-s light-grey desktop"
                href="mailto:albertolucasperez@gmail.com">albertolucasperez@gmail.com</a>
        </div>
    </footer>

    <script>
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const docRoot = document.documentElement;

        mobileMenuToggle?.addEventListener('change', () => {
            [document.body, docRoot].forEach((node) => {
                node.classList.toggle('menu-open', mobileMenuToggle.checked);
            });
        });
    </script>
</body>

</html>
