<?php
session_start();
$link = mysqli_connect("localhost", "root", "") or die("Error al conectar a la base de datos: " . mysqli_connect_error());
mysqli_select_db($link, "base2") or die("Error al seleccionar la base de datos: " . mysqli_error($link));
if(!empty($_POST['mail'])){
    $mail = $_POST['mail'];
    $query = "SELECT * FROM alumnos WHERE mail='$mail'";
    $result = mysqli_query($link, $query) or die("Error en la consulta: " . mysqli_error($link));
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['codigo'] = $row['codigo'];
        $_SESSION['mail'] = $row['mail'];
        $_SESSION['codcurso'] = $row['codcurso'];
    } else {
        echo "No se encontró ningún alumno con ese correo.";
    }
    
}
session_write_close();
?>
<!DOCTYPE html>
<html lang="es">    
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form method="POST" action="">
    <label for="mail">Correo electrónico:</label>
    <input type="email" id="mail" name="mail" required>
    <input type="submit" value="Ingresar">
</form>
<a href="existe.php">¿Existe el alumno?</a>
</body>
</html>