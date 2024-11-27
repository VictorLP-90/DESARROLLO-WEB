<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <form method="post" action="guardar_usuario.php">
        <h2>Registrar nuevo usuario</h2>
        <label>Usuario</label>
        <input type="text" name="usuario" required>
        <label>Contraseña</label>
        <input type="password" name="password" required>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
