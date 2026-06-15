<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Existe</title>
</head>
<body>
    <?php
    if(isset($_SESSION['nombre'])){
        echo "<h1>Bienvenido, " . $_SESSION['nombre'] . "</h1>";
        echo "<p>El código de curso es: " . $_SESSION['codcurso'] . "</p>";
        echo "<p>El código de alumno es: " . $_SESSION['codigo'] . "</p>";
        echo "<p>El mail es: " . $_SESSION['mail'] . "</p>";
    } else {
        echo "No estás logueado.";
        echo "<a href='ejercicio6.php'>Volver al inicio</a>";
    }
    ?>
</body>
</html>
