//Ejercicio 4 - Contar las páginas visitadas por un usuario durante su sesión.
<?php
session_start();
if(!isset($_SESSION["cant"])){
    $_SESSION["cant"]=1;
} else {
    $_SESSION["cant"]++;
}
//Acá no se debe cerrar sesión
// unset($_SESSION); 
// $_SESSION = array();
// session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contador de páginas visitadas - Ejercicio 4</title>
    <meta language="es">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8"><
    <body>
    <h1>Contador de páginas visitadas</h1>
    <p>Visitaste la página <?php echo $_SESSION["cant"]; ?> veces </p>
    </body>
    </html>

