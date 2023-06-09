<?php session_start();


?>
<!DOCTYPE html>
<html>
    <head>
	    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <title>BestKorea - The best place to find stay in Korea</title>
        <link rel="stylesheet" href="home-style.css">
    </head>
    <body>
        <header>
            <nav id="header-navbar">
                <h1>BestKorea<span class="dot-color-orange">.</span></h1>
                <ul>
                    <li><a href="#main-box-image">Home</a></li>
                    <li><a href="wip.php">Destinations</a></li>
                    <li><a href="wip.php">Personnal guides</a></li>
                    <?php
                    if (isset($_SESSION['auth']) && $_SESSION['admin'] == 1) {
                        echo '
                        <li><a href="messages.php">Panel Message</a></li>
                        ';
                    } else {
                        echo '
                        <li><a href="#contact">Contact</a></li>
                        ';
                    }
                    
                    ?>
                    <?php

                    if (isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
                        echo '
                        <li><a href="logout.php">Logout</a></li>
                        ';
                    } else {
                        echo '
                        <li><a href="login-page.php">Login</a></li>
                        ';
                    }

                    ?>
                </ul>
            </nav>
        </header>

        <main>
            <section id="main-box-image" onmouseover = "overBox()" onmouseout="outBox()">
                <img src="images/main.jpg" alt="main" id="bg-carousel">
                <div id="controlers-carousel">
                    <div id="sub-box-image">
                        <h2>Schedule your stay in Korea<b> like never before</b></h2>
                        <?php
                        if (isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
                            echo '
                            <a href="#" class="button-1">This way</a>
                            ';
                        } else {
                            echo '
                            <a href="login-page.php" class="button-1">This way</a>
                            ';
                        }
                        ?>
                    </div>
                    <div id="controlers">
                        <span id="button-left" onclick="funcGoLeft()"></span>
                        <span id="button-right" onclick="funcGoRight()"></span>
                        <span class="dot-carousel dot-initial" onclick="goToImage1()"></span>
                        <span class="dot-carousel dot-initial" onclick="goToImage2()"></span>
                        <span class="dot-carousel dot-initial" onclick="goToImage3()"></span>
                        <span class="dot-carousel dot-initial" onclick="goToImage4()"></span>
                    </div>
                </div>
            </section>

            <section id="main-steps-description">
                <div id="description-1">
                    <aside>
                        <img src="images/planify.png" alt="planify">
                        <h4>Planify</h4>
                    </aside>
                    <div class="centered">
                        <article>
                            <p>Entrust us with your dreams of escape: with family or friends, we will find the formula that will meet your expectations.</p>
                        </article>
                    </div>
                </div>
                <div id="description-2" style="background-color: #ddd;">
                    <aside>
                        <img src="images/organize.png" alt="organize">
                        <h4>Organize</h4>
                    </aside>
                    <div class="centered">
                        <article>
                            <p>Benefit from the expertise of our specialists of each destination, they accompany you in the realization of your trip.</p>
                        </article>
                    </div>
                </div>
                <div id="description-3">
                    <aside>
                        <img src="images/travel.png" alt="travel">
                        <h4>Travel</h4>
                    </aside>
                    <div class="centered">
                        <article>
                            <p>We take care of your safety and ensure your complete serenity throughout your trip.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section id="main-idea-trip">

                <article id="article-1">
                    <div class="overlay">
                        <h4>Go with your family</h4>
                        <p><small><span id="article-1-text"></span></small></p>
                        <a class="button-2" onclick="extendArticle1()">More information</a>
                    </div>
                </article>

                <article id="article-2">
                    <div class="overlay">
                        <h4>Desire to escape</h4>
                        <p><small><span id="article-2-text"></span></small></p>
                        <a class="button-2" onclick="extendArticle2()">More information</a>
                    </div>
                </article>

            </section>

            <section id="main-contact-form">
                <div id="contact">
                    <h3>Contact us</h3>
                    <p>At BestKorea we know that traveling is a human adventure but also an important financial commitment for you. That is why we make it a point of honor to take into account each of your expectations to help you in the preparation of your stay, tour or custom trip in the most beautiful area of Korea.</p>
                    <form action="post-message.php" method="post">
                        <fieldset>
                            <?php
                            if (!(isset($_SESSION['auth']) && $_SESSION['auth'] == true)) {
                                echo 
                                '<div id="creditential">
                                    <div>
                                        <label for="name">Your name: <span class="red">*</span></label>
                                        <input id="name" type="text" name="name" required>
                                    </div>
                                    <div>
                                        <label for="email">Your email: <span class="red">*</span></label>
                                        <input id="email" type="email" name="email" placeholder="Your email address" required>
                                    </div>
                                </div>';
                            }
                            ?>
                            <textarea rows="10" cols="60" style="font-size: 3vh;" id="message-area" name="message-area"></textarea><br><br>
                            <input type="submit" value="OK" class="button-3">
                        </fieldset>
                    </form>
                </div>
            </section>
        </main>

        <footer>
            <div>
                <h1>BestKorea<span class="dot-color-orange">.</span></h1>
                <div class="copyright">Copyright © 2023. All rights reserved.</div>
            </div>
        </footer>
    </body>
    <script src="home-script.js"></script>
</html>
