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
    <meta property="og:image" content="https://albertolucasperez.com/images/writing/cover.png">
    <meta name="description" content="Thoughts on design, leadership, and building products.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/writing.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Alberto Lucas - Writing</title>
</head>

<body>
    <header>
        <div id="navbar">
            <a id="logo" href="index.html">
                <p>Alberto Lucas</p>
            </a>
            <nav>
                <a class="navlink" href="work.php">Work</a>
                <a class="navlink-current" href="writing.php">Writing</a>
                <a class="navlink" target="_blank" href="Alberto Lucas.pdf">Resume</a>
                <a class="navlink" target="_blank" href="https://www.linkedin.com/in/alberto-lucas-perez/">Linkedin</a>
                <a class="navlink" href="mailto:albertolucasperez@gmail.com">Email</a>
                <label id="contact-button-mobile" for="mobile-menu-toggle">Menu</label>
            </nav>
        </div>
        <input type="checkbox" id="mobile-menu-toggle" class="check">
        <div id="mobile-navbar">
            <a class="navlink-mobile" href="work.php">Work</a>
            <a class="navlink-mobile" href="writing.php">Writing</a>
            <a class="navlink-mobile" href="Alberto Lucas.pdf">Resume</a>
            <a class="navlink-mobile" target="_blank"
                href="https://www.linkedin.com/in/alberto-lucas-perez/">Linkedin</a>
            <a class="navlink-mobile" href="mailto:albertolucasperez@gmail.com">Email</a>
            <label id="contact-button-close" for="mobile-menu-toggle" aria-label="Close menu">×</label>
        </div>
    </header>

    <main>
        <section id="writing-content">
            <h1 class="title-l">Writing</h1>

            <div id="posts">
                <div class="post-item">
                    <time class="post-date paragraph-r-s light-grey">October 31, 2025</time>
                    <a href="writing/ejemplo-post.php" class="post-title dark-grey">What is taste? Are you born with it or is it developed?</a>
                </div>
                <div class="post-item">
                    <time class="post-date paragraph-r-s light-grey">December 9, 2024</time>
                    <a href="writing/your-users-dont-understand-formulas.php" class="post-title dark-grey">Your users don't understand formulas</a>
                </div>
                <div class="post-item">
                    <time class="post-date paragraph-r-s light-grey">September 14, 2024</time>
                    <a href="writing/design-systems-70-years-ago.php" class="post-title dark-grey">Design systems were already trendy 70 years ago</a>
                </div>
                <div class="post-item">
                    <time class="post-date paragraph-r-s light-grey">July 23, 2024</time>
                    <a href="writing/if-you-have-to-explain-it.php" class="post-title dark-grey">If you have to explain it, it's not that good</a>
                </div>
                <!-- Add more posts here following the same structure -->
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
