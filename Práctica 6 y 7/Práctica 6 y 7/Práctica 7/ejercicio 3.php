//Ejercicio 3 - Formulario con nombre de usuario y cookies
<?php
if(!empty($_POST["nombre"])){
    $nombre = $_POST["nombre"];
    setcookie("nombre",$nombre,time()+ (60));
    echo "<h1>Bienvenido $nombre!!</h1>";
} 

if(isset($_COOKIE["nombre"])){
    $nombre = $_COOKIE["nombre"];
    echo "<h1>Bienvenido de nuevo, $nombre!!</h1>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="" method="POST" name="formulario">
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>