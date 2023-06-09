<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>BestKorea - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <link rel="stylesheet" href="login-style.css">
</head>
    <body>
    <header>
        <nav id="header-navbar">
            <h1>BestKorea<span class="dot-color-orange">.</span></h1>
            <ul>
                <li><a href="index.php#main-box-image">Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="container-form">
            <div id="container-image">
                <div id="login-div">
                    <h2>Login Page</h2>
                </div>
                <img src="images/login.jpg" alt="bestkorea">
            </div>
            <form action="login.php" method="POST">
                <fieldset id="container-field">
                    <div>
                        <?php
                            if (isset($_SESSION['login-fail']) && $_SESSION['login-fail'] == true) {
                                echo '
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" style="border-color: red;" required><br>
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password"  style="border-color: red;" required><br>
                                ';
                            } else {
                                echo '
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required><br>
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" required><br>
                                ';
                            }
                        ?>
                    </div>
                    <div id="container-button">
                        <input type="submit" value="LOGIN" id="login">
                        <a href="register-page.php" id="register">No account?<br>Register here.</a>
                    </div>
                </fieldset>
            </form>
        </section>
    </main>
    <footer>
        <div>
            <h1>BestKorea<span class="dot-color-orange">.</span></h1>
            <div class="copyright">Copyright © 2023. All rights reserved.</div>
        </div>
    </footer>
</body>
</html>
<?php
$_SESSION['login-fail'] = false;
?>
