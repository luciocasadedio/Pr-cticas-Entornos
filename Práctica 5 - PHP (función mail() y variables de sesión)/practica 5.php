// Práctica 5 - PHP (función mail() y variables de sesión)
// Ejercicio 1
<?php
if (isset($_POST['enviar'])){
    $destinatario = $_POST['destinatario'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    if (mail($destinatario, $asunto, $mensaje)) {
        echo "Correo enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
<html>
<head>
    <title>Enviar Correo - Ejercicio 1</title>
    <meta charset="UTF-8">
    <meta language="es">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>Enviar correo</h1>
<form method="POST" action="practica 5.php" name="formulario para mail">
<input type="mail"> Ingrese su mail:  