
<?php require "setup.php";
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbweb";
$port = 41062;

$db = new mysqli($servername, $username, $password, $dbname, $port) or die ('Unable to connect. Check your connection parameters.');

$usermessage = htmlspecialchars($_POST['message-area']);
if (isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $query = "SELECT * FROM users
            WHERE email = '$email' AND name = '$name'";
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    if (mysqli_num_rows($result) == 1) {
        $rows = mysqli_fetch_assoc($result);
        $id = $rows['id'];
    } else {
        $id = 0;
    }
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $id = 0;
}

$query = "INSERT INTO messages
         (username, email, userid, usermessage)
         VALUES
         ('$name', '$email', '$id', '$usermessage')";
$result = mysqli_query($db, $query) or die(mysqli_error($db));

mysqli_close($db);
header("Location: index.php");
?>