// Práctica 5 - PHP (función mail() y variables de sesión)
// Ejercicio 1
<?php
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers.= 'content-type: text/html; charset=iso-8859-1' . "\r\n";
if (isset($_POST['enviar'])){
    $remitente = $_POST['su_correo'];
    $destinatario = $_POST['destinatario'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
<html>
<head>
    <title>Enviar Correo - Ejercicio 1</title>
    <meta language="es">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Enviar correo</h1>
<form method="POST" action="" name="formulario para mail">
<input type="email" name="su_correo" placeholder="Su correo" required><br>
<input type="email" name="destinatario" placeholder="Destinatario" required><br>
<input type="text" name="asunto" placeholder="Asunto" required><br> 
<input type="text" name="mensaje" placeholder="Mensaje" required><br>
<input type="submit" name="enviar" value="Enviar"><br>
</form>
</body>
</html>