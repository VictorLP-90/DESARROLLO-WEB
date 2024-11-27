<?php
session_start();
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['usuario'] = $usuario;
        header("Location: bienvenida.php");
    } else {
        echo "Usuario o contraseña incorrectos.";
        echo '<a href="index.html">Intentar de nuevo</a>';
    }
}
