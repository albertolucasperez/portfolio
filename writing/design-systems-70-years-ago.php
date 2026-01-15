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
    <meta property="og:image" content="https://albertolucasperez.com/images/writing/design-systems/cover.jpg">
    <meta name="description" content="A reflection on design systems through the lens of Hans Gugelot's modular radio system for Braun from 1957.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/post.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <title>Design systems were already trendy 70 years ago - Alberto Lucas</title>
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
        <figure id="post-cover-wrapper">
            <img id="post-cover" src="../images/writing/system.jpg" alt="Design systems were already trendy 70 years ago">
            <figcaption class="paragraph-r-xxs light-grey"></figcaption>
        </figure>

        <section id="post-header">
            <time class="paragraph-r-s light-grey">September 14, 2024</time>
            <h1 class="title-l">Design systems were already trendy 70 years ago</h1>
        </section>

        <section id="post-content">
            <div class="post-section">
                <p class="title-s medium-grey">
                    In the design team at Mercadona Tech, we have different meetings or sessions that repeat weekly—not only to stay aligned and ensure the quality of our products, but especially to foster a design culture within the team.
                </p>
                <p class="title-s medium-grey">
                    It was in one of these sessions where David de la Iglesia told us about the work that Hans Gugelot, designer and professor at the Ulm School of Design, did for Braun; particularly about the Radio phono audiotape modular system, a project he developed in 1957 that would later be produced by Dieter Rams' team.
                </p>
                <p class="title-s medium-grey">
                    It was a modular radio system, based on components that shared the same style and production rules, generating different results when combined in various ways.
                </p>
                <p class="title-s medium-grey">
                    So, can we consider that this system designed 70 years ago was already a design system?
                </p>
            </div>

            <div class="post-section">
                <p class="title-s medium-grey" style="border-top: 1px solid #E8E8E6; padding-top: 32px;">
                    <em>I believe the answer to this question goes hand in hand with how we view our profession. We can think that digital product design is something completely new and different; however, we also have the option of seeing it as the evolution of a profession with an extensive and rich history.</em>
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
