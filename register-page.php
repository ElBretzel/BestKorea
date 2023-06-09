<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>BestKorea - Register</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
        <link rel="stylesheet" href="register-style.css">
</head>
    <body>
    <header>
        <nav id="header-navbar">
            <h1>BestKorea<span class="dot-color-orange">.</span></h1>
            <ul>
                <li><a href="index.php#main-box-image">Home</a></li>
                <li><a href="login-page.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="container-form">
            <div id="container-image">
                <div id="login-div">
                    <h2>Registration Page</h2>
                </div>
                <img src="images/register.jpg" alt="bestkorea">
            </div>
            <form action="register.php" method="POST" onsubmit="return validatePassword();">
                <fieldset id="container-field">
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required><br>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br>

                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required><br>

                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" id="confirm_password" name="confirm_password" required><br>
                    </div>
                    <input type="submit" value="Register" id="register">
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
<script src="register-script.js"></script>
</html>


