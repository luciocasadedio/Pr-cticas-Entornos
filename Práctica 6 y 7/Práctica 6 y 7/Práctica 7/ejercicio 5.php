<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 1 - Login</title>
</head>
<body>
    <div class="contenedor">
        <h2>Ingreso de Cliente</h2>
        <form action="procesar.php" method="POST">
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            
            <label for="clave">Clave:</label>
            <input type="password" id="clave" name="clave" required>
            
            <input type="submit" value="Enviar Datos">
        </form>
    </div>
</body>
</html>