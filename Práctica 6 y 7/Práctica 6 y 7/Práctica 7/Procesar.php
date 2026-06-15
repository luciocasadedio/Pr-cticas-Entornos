<?php
session_start();

if (!empty($_POST['usuario']) && !empty($_POST['clave'])) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $_SESSION['nombre_usuario'] = $usuario;
    $_SESSION['clave_usuario'] = $clave;

    setcookie("usuario_cookie", $usuario, time() + 3600, "/");
} else {

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesamiento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
        <h2>Datos Procesados</h2>
        <p>Las variables de sesión y la cookie han sido creadas con éxito.</p>
        <a href="mostrar.php" class="boton">Ir a la Página 3</a>
    </div>
</body>
</html>