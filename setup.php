<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbweb";
$port = 41062;

$db = new mysqli($servername, $username, $password, "test", $port) or die ('Unable to connect. Check your connection parameters.');

$query = "CREATE DATABASE IF NOT EXISTS $dbname";
$result = mysqli_query($db, $query) or die("Error creating database $dbname");

mysqli_select_db($db, $dbname);

$query = "CREATE TABLE IF NOT EXISTS users (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    isadmin TINYINT(1) DEFAULT 0
)" or die("Error creating table users");
$result = mysqli_query($db, $query) or die(mysqli_error($db));


$query = "CREATE TABLE IF NOT EXISTS messages (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    usermessage VARCHAR(100) NOT NULL,
    userid INT(10) UNSIGNED DEFAULT 0
)" or die("Error creating table messages");
$result = mysqli_query($db, $query) or die(mysqli_error($db));


mysqli_close($db);
?>
