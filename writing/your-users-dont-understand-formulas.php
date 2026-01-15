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
    <meta property="og:image" content="https://albertolucasperez.com/images/writing/formulas/cover.jpg">
    <meta name="description" content="Why familiar design patterns don't always work. A reflection on Jakob's Law and the importance of understanding your users' context.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/post.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <title>Your users don't understand formulas - Alberto Lucas</title>
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
            <img id="post-cover" src="../images/writing/usuarios.png" alt="Your users don't understand formulas">
            <figcaption class="paragraph-r-xxs light-grey"></figcaption>
        </figure>

        <section id="post-header">
            <time class="paragraph-r-s light-grey">December 9, 2024</time>
            <h1 class="title-l">Your users don't understand formulas</h1>
        </section>

        <section id="post-content">
            <div class="post-section">
                <p class="title-s medium-grey">
                    You've probably noticed that the heart icon on Twitter and Instagram represents the same action: indicating that you like something. This is an example of Jakob's Law, a principle based on the idea that, since users spend most of their time using other applications, they expect your application to behave the same way.
                </p>
                <p class="title-s medium-grey">
                    Using these patterns helps improve the experience, making products easier to use and reducing the learning curve.
                </p>
                <p class="title-s medium-grey">
                    That's why it can be tempting to directly replicate interaction patterns in any product, hoping that familiarity alone will be enough to guarantee usability. But like any design principle, you need to consider the nuances.
                </p>
            </div>

            <div class="post-section">
                <h2 class="title-m dark-grey">Our case</h2>
                <p class="title-s medium-grey">
                    A couple of months ago, while working on a new feature, we decided to start by implementing a very common interaction pattern from many other applications, adapting it to our context; we weren't reinventing the wheel, so we expected our users to understand it easily. However, when we started testing with them, we realized that reality wasn't so simple.
                </p>
                <p class="title-s medium-grey">
                    Although the pattern was well-known and worked in other applications (or seemed to work—a topic that would deserve its own post), it didn't work the same way in our application, as our users weren't completing the flow as we expected.
                </p>
                <p class="title-s medium-grey">
                    At this point, we reconsidered whether the path we had followed made sense. Have we really understood our users' problem? Are we adapting to our specific context?
                </p>
            </div>

            <div class="post-section">
                <h2 class="title-m dark-grey">Listening to your users is the first step toward a good solution</h2>
                <p class="title-s medium-grey">
                    We decided to refocus on listening to our users to understand how they were interacting with our application and where the challenges might be. Through interviews and user testing, we realized the complexity that this new feature added in our purchasing context—what initially seemed like just another thing to consider turned out to be the main problem to solve.
                </p>
                <p class="title-s medium-grey">
                    During testing, we iterated the flow adapting to what our users expected, not to what others had applied; we even iterated on the fly, based on what we discovered with each user to test it with the next one.
                </p>
                <p class="title-s medium-grey">
                    Thanks to everything we learned, we arrived at a solution that responded to our users' needs and better fit our specific context.
                </p>
            </div>

            <div class="post-section">
                <p class="title-s medium-grey" style="border-top: 1px solid #E8E8E6; padding-top: 32px;">
                    <em>In the end, design isn't about applying universal formulas or copying what others do, but rather reflecting on a problem to find a solution that makes sense in your context.</em>
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
