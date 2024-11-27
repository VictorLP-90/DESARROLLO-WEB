<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p>[ACDB1-35%] Foro: Desarrollar un sistema de autenticación de usuarios (login) que permita a los usuarios acceder a una aplicación web utilizando PHP, MySQL y HTML.</p>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>
