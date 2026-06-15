//Ejercicio 4 - Titular de un periodico con cookies
<?php
if(isset($_POST["titular"])){
    $titular = $_POST["titular"];
    setcookie("titular",$titular,time()+ (60));
} else{
    if(isset($_COOKIE["titular"])){
    $titular = $_COOKIE["titular"];
    }
}
if(isset($titular)){
    echo "<h1>$titular</h1>";
    echo "<h2>Último titular leído: $titular</h2>";
}
else{
    echo "<h1>Bienvenido!!</h1>";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    </head>
    <h2>Selecciona un titular para mostrarlo en la página</h2>
    <form action="" method="POST" name="formulario">
        <input type="radio" name="titular" value="Noticia economica">Noticia económica
        <input type="radio" name="titular" value="Noticia política">Noticia política
        <input type="radio" name="titular" value="Noticia deportiva">Noticia deportiva
        <input type="submit" value="Enviar">
    </form>
    </html>
    <?php
}
?>