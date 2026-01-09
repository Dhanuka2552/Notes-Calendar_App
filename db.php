<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "calendar_app";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed");
}
?>
