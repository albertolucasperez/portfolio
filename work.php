<?php 
session_start();
// Verifica si existe la variable de sesión 'auth'
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    // Si no está establecida, redirige al login
    header("Location: login");
    exit;
}
?>
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/work.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Alberto Lucas - Work</title>
</head>

<body>
    <header>
        <div id="navbar">
            <a id="logo" href="index.html">
                <p>Alberto Lucas</p>
            </a>
            <nav>
                <a class="navlink-current" href="work.php">Work</a>
                <a class="navlink" target=”_blank” href="Alberto Lucas.pdf">Resume</a>
                <a class="navlink" target=”_blank” href="https://www.linkedin.com/in/alberto-lucas-perez/">Linkedin</a>
                <a class="navlink" href="mailto:albertolucasperez@gmail.com">Email</a>
                <label id="contact-button-mobile" for="mobile-menu-toggle">Menu</label>
            </nav>
        </div>
        <div id="container">
            <input type="checkbox" id="mobile-menu-toggle" class="check">
            <div id="mobile-navbar">
                <a class="navlink-mobile" href="work.php">Work</a>
                <a class="navlink-mobile" href="Alberto Lucas.pdf">Resume</a>
                <a class="navlink-mobile" target=”_blank”
                    href="https://www.linkedin.com/in/alberto-lucas-perez/">Linkedin</a>
                <a class="navlink-mobile" href="mailto:albertolucasperez@gmail.com">Email</a>
                <label id="contact-button-close" for="mobile-menu-toggle" aria-label="Close menu">×</label>
            </div>
    </header>

    <main>
        <section id="hero">
            <div id="title">
                <h1 class="title-l">Case studies</h1>
                <h2 class="title-s medium-grey">Examples of projects where I led product design, creating solutions for
                    internal teams and large-scale e-commerce.</h2>
            </div>
        </section>
        <section id="work">
            <a href="acmofy.php">
                <div class="project">
                            <div class="title-intro">
                                <h3 class="paragraph-m-m dark-grey">Acmofy</h3>
                                <h4 class="paragraph-r-s light-grey">A new app for Mercadona Customer Support agents.
                                </h4>
                            </div>
                    <img src="./images/work/acmofy_cover.png" alt="Acmofy app screenshot">
                </div>
            </a>
            <a href="shopping_lists.php">
                <div class="project">
                            <div class="title-intro">
                                <h3 class="paragraph-m-m dark-grey">Mercadona Shopping Lists</h3>
                                <h4 class="paragraph-r-s light-grey">A new shopping lists feature for Mercadona Online.
                                </h4>
                            </div>
                    <img src="./images/work/shopping_lists_cover.png"
                        alt="Mercadona shopping lists screenshots">
                </div>
            </a>
        </section>
    </main>

    <footer>
        <div class="copyright">
            <p class="paragraph-r-s light-grey">© 2026 Alberto Lucas</p>
            <a class="paragraph-r-s light-grey desktop"
                href="mailto:albertolucasperez@gmail.com">albertolucasperez@gmail.com</a>
        </div>
    </footer>
</body>

</html>
