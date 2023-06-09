<?php require "setup.php";
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbweb";
$port = 41062;

$db = new mysqli($servername, $username, $password, $dbname, $port) or die ('Unable to connect. Check your connection parameters.');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "select * from users";
$result = mysqli_query($db, $query) or die(mysqli_error($db));
if (mysqli_num_rows($result) != 1) {
    $_SESSION['admin'] = 1;
    $isadmin = 1;
} else {
    $_SESSION['admin'] = 0;
    $isadmin = 0;
}

$query = "INSERT INTO users
         (name, email, password, isadmin)
         VALUES
         ('$name', '$email', '$password', '$isadmin')";
$result = mysqli_query($db, $query) or die(mysqli_error($db));

$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['auth'] = true;



header("Location: index.php");

mysqli_close($db);
?>
