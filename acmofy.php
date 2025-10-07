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
    <title>Alberto Lucas - Acmofy</title>
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
                <h1 class="title-l">Acmofy</h1>
                <h2 class="title-m dark-grey">A internal tool for Mercadona support agents that improved ticket
                    resolution
                    efficiency by 58 seconds, <span class="green">saving over 400 work hours annually.</span></h2>
            </div>
            <div id="project-data">
                <div class="data-column">
                    <p class="paragraph-m-xs">Product Designer</p>
                    <p class="paragraph-r-xs dark-grey">Alberto Lucas</p>
                </div>
                <div class="data-column">
                    <p class="paragraph-m-xs">Product Manager</p>
                    <p class="paragraph-r-xs dark-grey">Lara Tessi</p>
                </div>
                <div class="data-column">
                    <p class="paragraph-m-xs">Tech Lead</p>
                    <p class="paragraph-r-xs dark-grey">Enrique Palenque</p>
                </div>
                <div class="data-column">
                    <p class="paragraph-m-xs">Process Owner</p>
                    <p class="paragraph-r-xs dark-grey">Esperanza Fuerte</p>
                </div>
            </div>

            <img class="rounded-24" src="./images/acmofy/acmofy-cover.png" alt="Customer support area">
        </section>
        <section class="project-section">
            <div class="section-title">
                <h3 class="title-s dark-grey">Overview</h3>
                <h4 class="title-xl">Customer support for +20K daily orders</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <h5 class="paragraph-m-s dark-grey">Intro</h5>
                    <p class="paragraph-r-s">Mercadona Online, the leading online supermarket in Spain, managed a daily
                        volume exceeding 20,000 orders. In the context of the company expansion, the customer support
                        team faced an increasing demand. Given this situation, we set a strategic objective to improve
                        the productivity of the support team, prioritizing this action over increasing headcount.
                        <br><br>
                        To address this challenge, an initial quantitative analysis was conducted on the types of
                        incidents that agents handled most frequently and that required the greatest time investment.
                        This analysis revealed that inquiries related to the absence of products in orders were the most
                        common and consumed the most resources.
                    </p>
                </div>
                <div class="title-paragraph">
                    <h5 class="paragraph-m-s dark-grey">Problem Statement</h5>
                    <p class="paragraph-r-s">To enable the expansion of Mercadona Online and avoid increasing
                        headcount, we needed to improve the productivity of the customer support team.
                    </p>
                </div>
            </div>
        </section>
        <section class="project-section">
            <div class="section-title">
                <h3 class="title-s dark-grey">Discover</h3>
                <h4 class="title-xl">Understanding the problem</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <p class="paragraph-r-s">To fully understand the problem, I decided to structure the research in
                        two main parts.
                        <br><br>
                        Firstly, I worked with the process owner and the customer support team coordinator to understand
                        in detail the process that agents had to follow when receiving an incident and the tools they
                        used.
                        <br><br>
                        Secondly, to gain a comprehensive understanding of the users' context and their tasks, I
                        conducted shadowing sessions by sitting with the agents in their workstations and listening to
                        their calls with customers.
                    </p>
                </div>
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">Mapping the process</h6>
                </div>
                <p class="paragraph-r-s">Through the interviews, I was able to identify the process established for
                    resolving incidents related to missing products.</p>
            </div>
            <img class="rounded-24" src="./images/acmofy/process-epc.png" alt="Process">
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">Shadowing with agents</h6>
                </div>
                <p class="paragraph-r-s">To fully grasp the context, tasks, and users, I conducted shadowing sessions
                    with the customer support team.</p>
            </div>
            <img class="rounded-24" src="./images/acmofy/shadowing.png" alt="Shadowing with the user">
            <img class="rounded-24" src="./images/acmofy/screens.png" alt="Multiple screenshots">
        </section>
        <section class="project-section">
            <div class="section-title">
                <h3 class="title-s dark-grey">Insights</h3>
                <h4 class="title-xl">Multitasking between multiple apps</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <p class="paragraph-r-s">During research, I discovered that although Zendesk was their main tool,
                        agents used over 10 additional tools to find information for each incident.
                        <br><br>
                        Also, for missing product issues, agents had two distinct tasks: while assisting the customer,
                        they also had to spend significant time gathering information from other systems and manually
                        logging it into Zendesk, which was a time-consuming process for process improvement.
                        <br><br>
                        Finally, because their tools weren't designed for them, agents followed different processes,
                        leading to inconsistent customer solutions.
                    </p>
                </div>
            </div>
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">User flow</h6>
                </div>
            </div>
            <img class="rounded-24" src="./images/acmofy/user-flow.png" alt="User flow">
        </section>
        <section class="project-section">
            <div class="section-title">
                <h3 class="title-s dark-grey">Explore</h3>
                <h4 class="title-xl">Finding a better experience</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <p class="paragraph-r-s">After gathering all the information from the research, I organized
                        exploration workshops with the multidisciplinary team, including representatives from backend,
                        frontend, the tech lead, the process owner, and the product manager.
                        <br><br>
                        It was clear that the solution couldn't be a simple fix within one of the existing 10+ tools.
                        Therefore, I focused on the vision of a single tool that would complement Zendesk and serve as a
                        comprehensive assistant for agents across all their incidents, guiding them through each step to
                        ensure consistent decision-making across the team.
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
            <img class="rounded-24" src="./images/acmofy/brainstorming.png" alt="Brainstorming">
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">Solution</h6>
                </div>
                <p class="paragraph-r-s">We implemented this solution in small steps, releasing iterations to production
                    that provided value to the agents from the beginning.</p>
            </div>
            <img class="rounded-24" src="./images/acmofy/solution-1.png" alt=" Screenshot">
            <img class="rounded-24" src="./images/acmofy/solution-2.png" alt=" Screenshot">
            <img class="rounded-24" src="./images/acmofy/solution-3.png" alt=" Screenshot">
        </section>
        <section class="project-section">
            <div class="section-title">
                <h3 class="title-s dark-grey">Test</h3>
                <h4 class="title-xl">Testing with users</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <p class="paragraph-r-s">I maintained direct and continuous contact with support agents, conducting
                        testing and iterating on the solution in real-world scenarios.
                        <br><br>
                        This involved carrying out usability tests and refining the prototype immediately based on the
                        agents' feedback.
                        <br><br>
                        This hands-on approach enabled us to quickly validate assumptions and adapt the tool to their
                        actual needs.
                    </p>
                </div>
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">Prototype validation with users</h6>
                </div>
            </div>
            <img class="rounded-24" src="./images/acmofy/testing.png" alt="Prototype testing with users">
        </section>
        <section class="project-section">
            <div class="section-title">
                <h3 class="title-s dark-grey">Impact</h3>
                <h4 class="title-xl">Over 400 work hours saved annually</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <p class="paragraph-r-s">With the development of the new app, we managed to saved 58 seconds per
                        issue, translating to 402 hours per year.
                    </p>
                </div>
        </section>
        <section class="design-step">
            <div class="line-title-paragraph">
                <div class="line-title">
                    <div class="line"></div>
                    <h6 class="paragraph-m-m dark-grey">Time spent per ticket</h6>
                </div>
            </div>
            <img class="rounded-24" src="./images/acmofy/graph.png" alt="Time spent per ticket">
        </section>
        <section class="project-section last">
            <div class="section-title">
                <h3 class="title-s dark-grey">Listen</h3>
                <h4 class="title-xl">Next steps</h4>
            </div>
            <div class="section-text">
                <div class="title-paragraph">
                    <p class="paragraph-r-s">With each iteration we released, I sat down with the agents to observe how
                        they interacted with the tool and ask for their feedback.
                        <br><br>
                        Thanks to this feedback, we made adjustments to the flow and also worked on adapting the tool to
                        address other similar customer issues.
                    </p>
                </div>
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
