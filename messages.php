<?php session_start();
    if (!(isset($_SESSION['auth']) && $_SESSION['auth'] == true && $_SESSION['admin'] == 1)) {
        header("Location: index.php");
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BestKorea - AdminMessage</title>
    <link rel="stylesheet" href="messages-style.css">
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

    </header>
    <main>
        <ul>
            <?php require "setup.php";
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "dbweb";
            $port = 41062;

            $db = new mysqli($servername, $username, $password, $dbname, $port) or die ('unable to connect. check your connection parameters.');

            $query = "select * from messages";
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
            echo '<table id="table" border="0">';
            echo '
                  <thead>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>UserID</th>
                  </thead>
            ';
            echo '<tbody>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                foreach($row as $value) {
                    echo '<td>' . $value . '</td>';
                }
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>'
            ?>
        </ul>
    </main>
    <footer>
        <div>
            <h1>BestKorea<span class="dot-color-orange">.</span></h1>
            <div class="copyright">Copyright © 2023. All rights reserved.</div>
        </div>
    </footer>
</body>
</html>