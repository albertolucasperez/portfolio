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
    <meta property="og:image" content="https://albertolucasperez.com/images/writing/explain/cover.jpg">
    <meta name="description" content="On the importance of communication and articulating design decisions to your team.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/post.css">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <title>If you have to explain it, it's not that good - Alberto Lucas</title>
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
        <section id="post-header" style="margin-top: 40px;">
            <time class="paragraph-r-s light-grey">July 23, 2024</time>
            <h1 class="title-l">If you have to explain it, it's not that good</h1>
        </section>

        <section id="post-content">
            <div class="post-section">
                <p class="title-s medium-grey">
                    You've probably heard this phrase more than once in the design world: "A design should be so intuitive that it requires no explanation." However, what may seem obvious to our users isn't always clear to the rest of the team.
                </p>
                <p class="title-s medium-grey">
                    This week, while reading <em>Articulating Design Decisions</em> by Tom Greever, I came across this quote: "We think carefully about the users of our applications but less so about the stakeholders on our projects. Let's apply these same principles to the people we work with so that we can create a better product together."
                </p>
                <p class="title-s medium-grey">
                    When what interests us most are Figma's new features or the latest AI launches, it seems we've forgotten something essential: communication. As product designers, we don't live in isolation working in front of a screen—we collaborate as a team with other roles who have different perspectives than ours. That's why we need to be aware of the importance of justifying and communicating our design decisions to the rest of the team.
                </p>
                <p class="title-s medium-grey">
                    For me, one of the key aspects of communication is empathy. Only if we're able to identify others' needs and concerns to adapt our communication accordingly, can we convey a message that truly connects with them.
                </p>
            </div>

            <div class="post-section">
                <p class="title-s medium-grey" style="border-top: 1px solid #E8E8E6; padding-top: 32px;">
                    <em>To a large extent, your ability as a designer is limited by your ability to communicate.</em>
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
