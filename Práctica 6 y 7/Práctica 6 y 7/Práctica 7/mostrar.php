<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 3 - Mostrar Datos</title>
</head>
<body>
    <div class="contenedor">
        <h2>Datos Recuperados</h2>
        
        <div class="datos">
            <h3>Desde Variables de Sesión:</h3>
            <p><strong>Usuario:</strong> 
                <?php echo isset($_SESSION['nombre_usuario']) ? $_SESSION['nombre_usuario'] : 'No definido'; ?>
            </p>
            <p><strong>Clave:</strong> 
                <?php echo isset($_SESSION['clave_usuario']) ? $_SESSION['clave_usuario'] : 'No definida'; ?>
            </p>

            <hr>

            <h3>Desde la Cookie:</h3>
            <p><strong>Usuario:</strong> 
                <?php echo isset($_COOKIE['usuario_cookie']) ? $_COOKIE['usuario_cookie'] : 'Cookie no encontrada o expirada'; ?>
            </p>
        </div>

        <a href="index.php" class="boton">Volver al Inicio</a>
    </div>
</body>
</html>