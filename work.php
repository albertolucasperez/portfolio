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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <a class="navlink-current" href="work">Work</a>
                <a class="navlink" target=”_blank” href="Alberto Lucas.pdf">Resume</a>
                <a class="navlink" target=”_blank” href="https://www.linkedin.com/in/alberto-lucas-perez/">Linkedin</a>
                <a id="contact-button-desktop" href="mailto:albertolucasperez@gmail.com">Contact</a>
                <a id="contact-button-mobile" href="">Menu</a>
            </nav>
        </div>
        <div id="container">
            <input type="checkbox" class="check">
            <div id="mobile-navbar">
                <a class="navlink-mobile" href="work">Work</a>
                <a class="navlink-mobile" href="Alberto Lucas.pdf">Resume</a>
                <a class="navlink-mobile" target=”_blank”
                    href="https://www.linkedin.com/in/alberto-lucas-perez/">Linkedin</a>
                <a class="navlink-mobile contact-button" href="mailto:albertolucasperez@gmail.com">Contact</a>
                <div id="contact-button-close">Close</div>
            </div>
    </header>

    <main>
        <section id="hero">
            <div id="title">
                <h1 class="title-l">Case studies</h1>
                <h2 class="title-s dark-grey">Examples of projects where I led product design, creating solutions for
                    internal teams and large-scale e-commerce.</h2>
            </div>
        </section>
        <section id="work">
            <a href="acmofy">
                <div class="project">
                    <div class="project-bar">
                        <div class="icon-title">
                            <img class="icon" src="./images/work/acmofy-icon.svg" alt="Acmofy app icon">
                            <div class="title-intro">
                                <h3 class="paragraph-m-m light-grey">Acmofy</h3>
                                <h4 class="paragraph-r-xs dark-grey">A new app for Mercadona Customer Support agents.
                                </h4>
                            </div>
                        </div>
                        <div class="arrow-icon-l">
                            <img src="./images/work/arrow.svg" alt="arrow">
                        </div>
                    </div>
                    <img class="rounded-24" src="./images/work/acmofy-cover.png" alt="Acmofy app screenshot">
                </div>
            </a>
            <a href="shopping_lists">
                <div class="project">
                    <div class="project-bar">
                        <div class="icon-title">
                            <img class="icon" src="./images/work/mercadona-icon.svg" alt="Mercadona app icon">
                            <div class="title-intro">
                                <h3 class="paragraph-m-m light-grey">Mercadona Shopping Lists</h3>
                                <h4 class="paragraph-r-xs dark-grey">A new shopping lists feature for Mercadona Online.
                                </h4>
                            </div>
                        </div>
                        <div class="arrow-icon-l">
                            <img src="./images/work/arrow.svg" alt="arrow">
                        </div>
                    </div>
                    <img class="rounded-24" src="./images/work/shopping_lists_cover.png"
                        alt="Mercadona shopping lists screenshots">
                </div>
            </a>
        </section>
    </main>

    <footer>
        <div class="copyright">
            <p class="paragraph-r-s dark-grey">© 2025 Alberto Lucas</p>
            <a class="paragraph-r-s dark-grey desktop"
                href="mailto:albertolucasperez@gmail.com">albertolucasperez@gmail.com
                ↗</a>
        </div>
    </footer>
</body>

</html>