<?php session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BestKorea - Work in Progress</title>
    <link rel="stylesheet" href="wip-style.css">

</head>
<body>
    <header>
        <nav id="header-navbar">
            <h1>BestKorea<span class="dot-color-orange">.</span></h1>
            <ul>
                <li><a href="index.php#main-box-image">Home</a></li>
                <li><a href="wip.php">Destinations</a></li>
                <li><a href="wip.php">Personnal guides</a></li>
                <li><a href="index.php#contact">Contact</a></li>
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
        <img src="images/wip.jpg" id="background-wip"></span>
    </main>
    <footer>
        <div>
            <h1>BestKorea<span class="dot-color-orange">.</span></h1>
            <div class="copyright">Copyright © 2023. All rights reserved.</div>
        </div>
    </footer>
</body>

</html>