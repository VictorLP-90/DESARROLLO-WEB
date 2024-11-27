<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Verificar si el usuario ya existe
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = mysqli_query($conn, $query);
    $nr = mysqli_num_rows($result);

    if ($nr == 0) {
        // Insertar el nuevo usuario
        $query_insert = "INSERT INTO usuarios (usuario, password) VALUES ('$usuario', '$password')";
        if (mysqli_query($conn, $query_insert)) {
            header("Location: index.html");
        } else {
            echo "Error al registrar el usuario.";
        }
    } else {
        echo "El usuario ya existe.";
    }
}
?>
