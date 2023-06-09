<?php require "setup.php";
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbweb";
$port = 41062;

$db = new mysqli($servername, $username, $password, $dbname, $port) or die ('unable to connect. check your connection parameters.');

$email = $_POST['email'];
$password = $_POST['password'];

$query = "select * from users
          where email = '$email' and password = '$password'";

$result = mysqli_query($db, $query) or die(mysqli_error($db));
if (mysqli_num_rows($result) == 1) {
    $rows = mysqli_fetch_assoc($result);

    $_SESSION['name'] = $rows['name'];
    $_SESSION['email'] = $rows['email'];
    $_SESSION['auth'] = true;
    $_SESSION['admin'] = $rows['isadmin'];
    header("Location: index.php");
} else {
    $_SESSION['login-fail'] = true;
    header("Location: login-page.php");
}

mysqli_close($db);
?>