<?php
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap');
    </style>
    <link rel="stylesheet" href="css/product-design.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Alberto Lucas - Mercadona Shopping Lists</title>
</head>

<body>
    <header>
        <div id="navbar">
            <a id="logo" href="index.html">
                <p>Alberto Lucas</p>
            </a>
            <nav>
                <a class="navlink" target=”_blank” href="Alberto Lucas.pdf">Resume</a>
                <a class="navlink" target=”_blank” href="https://www.linkedin.com/in/alberto-lucas-perez/">Linkedin</a>
                <a id="contact-button-desktop" href="mailto:albertolucasperez@gmail.com">Contact</a>
                <a id="contact-button-mobile" href="">Menu</a>
            </nav>
        </div>
        <div id="container">
            <input type="checkbox" class="check">
            <div id="mobile-navbar">
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
                <h1 class="title-l">Shopping lists</h1>
                <h2 class="title-m dark-grey">A new shopping lists feature for Mercadona Online that generated an <span
                        class="green">extra €35,000 in daily revenue.</span></h2>
            </div>
            <div id="project-data">
                <div class="data-column">
                    <p class="paragraph-m-xs">Product Designer</p>
                    <p class="paragraph-r-xs dark-grey">Alberto Lucas</p>
                </div>
                <div class="data-column">
                    <p class="paragraph-m-xs">Product Manager</p>
                    <p class="paragraph-r-xs dark-grey">David Alfageme</p>
                </div>
                <div class="data-column">
                    <p class="paragraph-m-xs">Tech Lead</p>
                    <p class="paragraph-r-xs dark-grey">Juanjo Ponz</p>
                </div>
                <div class="data-column">
                    <p class="paragraph-m-xs">Business</p>
                    <p class="paragraph-r-xs dark-grey">Laura Jimenez</p>
                </div>
            </div>

            <img class="rounded-24" src="./images/shopping_lists/shopping__lists_cover.png"
                alt="Mercadona app screenshots">
        </section>
        <section class="project-section">
            <div class="section-title">
                <h3 class="title-s dark-grey">Overview</h3>
                <h4 class="title-xl">Automatic vs manual shopping lists</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <h5 class="paragraph-m-s dark-grey">Intro</h5>
                    <p class="paragraph-r-s">In the Mercadona Online app, the only available list was My regulars
                        (Frequent Items), an intelligent list of products based on previous purchases.
                        <br><br>
                        However, through continuous discovery with customers, we found that users faced significant
                        limitations: they couldn't manually add products, adjust quantities, or effectively manage items
                        they didn't purchase regularly; they could only delete items.
                        <br><br>
                        This created friction for users, hindering their ability to organize their shopping and plan
                        effectively.
                    </p>
                </div>
                <div class="title-paragraph">
                    <h5 class="paragraph-m-s dark-grey">Problem Statement</h5>
                    <p class="paragraph-r-s">Mercadona Online's limited My regulars list prevented adding or modifying
                        products, causing users to forget items from their manual lists, according to our continuous
                        discovery.
                    </p>
                </div>
            </div>
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">My regulars list</h6>
                </div>
            </div>
            <img class="rounded-24" src="./images/shopping_lists/my_regulars.png" alt="Mercadona app screenshots">
        </section>
        <section class="project-section">
            <div class="section-title">
                <h3 class="title-s dark-grey">Discover</h3>
                <h4 class="title-xl">Understanding the problem</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <p class="paragraph-r-s">To gain a deeper understanding of the problem and users' needs regarding
                        shopping lists, I conducted customer interviews.
                        <br><br>
                        The main objective was to learn about their expectations for this functionality and whether they
                        were already using other tools or features within our platform to address this need.
                        <br><br>
                        Through these conversations, I discovered that users often struggled with missing products in
                        the My regulars list, especially non-weekly items, leading to confusion. Many users forgot
                        certain products.
                        <br><br>
                        Furthermore, some customers resorted to using paper or digital lists for various purposes, such
                        as tracking missing items or planning purchases for special events.
                    </p>
                </div>
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">Interviews with users</h6>
                </div>
            </div>
            <img class="rounded-24" src="./images/shopping_lists/interviews.png" alt="Interviews with users">
        </section>
        <section class="project-section">
            <div class="section-title">
                <h3 class="title-s dark-grey">Explore</h3>
                <h4 class="title-xl">Finding a better experience</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <p class="paragraph-r-s">Once I fully understood the problem and the identified need, I organized a
                        brainstorming workshop with the entire technical and product team to collaboratively propose
                        solutions.
                        <br><br>
                        From all the ideas that emerged during these sessions, I designed what the initial MVP should be
                        that we wanted to validate with users.
                    </p>
                </div>
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">Brainstorming workshop</h6>
                </div>
            </div>
            <img class="rounded-24" src="./images/shopping_lists/brainstorming.png" alt="Brainstorming">
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">MVP solution</h6>
                </div>
                <p class="paragraph-r-s">The initial solution involved creating a basic feature for users to create and
                    manage shopping lists within the app. Users could save products directly from the product detail
                    page.</p>
            </div>
            <img class="rounded-24" src="./images/shopping_lists/solution-1.png" alt=" Screenshot">
            <img class="rounded-24" src="./images/shopping_lists/solution-2.png" alt=" Screenshot">
        </section>
        <section class="project-section">
            <div class="section-title">
                <h3 class="title-s dark-grey">Test</h3>
                <h4 class="title-xl">Testing with users</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <p class="paragraph-r-s">I validated the flow with customers in Mercadona supermarkets and launched
                        an internal beta.
                        <br><br>
                        I iterated on the design multiple times, even during testing, to ensure clarity between adding
                        products to the cart and saving them to a list.
                        <br><br>
                        Once we validated the usability of the initial MVP, we decided to launch it to a small group of
                        users to gather feedback as quickly as possible.
                    </p>
                </div>
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">Mercadona supermarket</h6>
                </div>
            </div>
            <img class="rounded-24" src="./images/shopping_lists/mercadona.png" alt="Mercadona supermarket">
        </section>
        <section class="project-section">
            <div class="section-title">
                <h3 class="title-s dark-grey">Listen</h3>
                <h4 class="title-xl">First iterations</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <p class="paragraph-r-s">To assess the feature's performance, we conducted both quantitative and
                        qualitative analyses. We tracked key metrics such as the percentage of lists containing
                        products, the occurrence of user errors, and how users named their lists.
                        <br><br>
                        Based on user feedback, we implemented several improvements. Notably, we added a product search
                        function within the lists, which helped users find items more easily and contributed to an
                        increase in the percentage of lists with products, from 50% to 70%.
                        <br><br>
                        Moving forward, we will continue to gather both quantitative and qualitative feedback to further
                        refine the feature and ensure its ongoing success.
                    </p>
                </div>
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">Product search iteration</h6>
                </div>
                <p class="paragraph-r-s">When we added a product search function within the lists, the percentage of
                    lists with products increased from 50% to 70%.</p>
            </div>
            <img class="rounded-24" src="./images/shopping_lists/search.png" alt="Mercadona app screenshots">
        </section>
        <section class="project-section last">
            <div class="section-title">
                <h3 class="title-s dark-grey">Impact</h3>
                <h4 class="title-xl">Extra 35,000€ in daily revenue</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <p class="paragraph-r-s">This new feature contributed to a business impact of €1.75 more per order,
                        generating an extra €35,000 in daily revenue.
                    </p>
                </div>
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">Key metrics</h6>
                </div>
            </div>
            <img class="rounded-24" src="./images/shopping_lists/key-metrics.png" alt="Key metrics">
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
