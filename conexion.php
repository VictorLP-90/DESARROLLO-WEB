<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "login_user";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

