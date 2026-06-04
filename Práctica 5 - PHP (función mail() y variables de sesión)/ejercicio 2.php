//Ejercicio 2 - Página Contacto
<?php
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers.= 'content-type: text/html; charset=iso-8859-1' . "\r\n";

if(isset($_POST["enviar"])){
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $consulta = $_POST["consulta"];
    $destinatario = "luciocasadedio@gmail.com";
    $asunto = "Consulta desde el formulario de contacto";
    $headers.='From: ' . $correo . "\r\n";
    $cuerpo = "<strong>Nombre:</strong> " . $nombre . "<br><strong>Correo:</strong> " . $correo . "<br><strong>Consulta:</strong> " . $consulta;
    
    if(mail($destinatario, $asunto, $cuerpo, $headers)){
    echo "Correo enviado correctamente.";
    } else {
    echo "Error al enviar el correo.";
    }
}

?>

<html>
<!DOCTYPE html>
<head>
    <title>Contacto - Ejercicio 2</title>
    <meta language="es">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>
    <body>
    <h1>Contacto</h1>
    <form method="POST" action="" name="formulario de contacto">
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="email" name="correo" placeholder="Correo" required><br>
        <textarea name="consulta" placeholder="Consulta" required></textarea><br>
        <input type="submit" name="enviar" value="Enviar"><br>
    </form>
    </body>
</html>