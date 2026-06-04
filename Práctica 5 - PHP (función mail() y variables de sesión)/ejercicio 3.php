//Ejercicio 3 - Página recomendación del sitio a un amigo
<?php
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers.= 'content-type: text/html; charset=iso-8859-1' . "\r\n";
if (isset($_POST['submit'])) {
    $tu_nombre  = $_POST['tu_nombre'];
    $tu_email   = $_POST['tu_email'];
    $amigo_email = $_POST['amigo_email'];

    $destinatario = $amigo_email;
    $asunto       = "$tu_nombre te recomienda nuestro sitio";
    $cuerpo       = "Hola!\n\n$tu_nombre pensó que te podría interesar visitar nuestro sitio.\n\nVisitanos en: http://www.misitio.com\n\nSaludos.";
    $headers      = "From: $tu_email\r\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "<p>Recomendación enviada con éxito a $amigo_email.</p>";
    } else {
        echo "<p>Hubo un error al enviar.</p>";
    }
} else {
?>
<html>
<head><title>Recomendar sitio</title></head>
<body>
  <h2>Recomendar a un amigo</h2>
  <form action="" method="post">
    <label>Tu nombre:</label><br>
    <input type="text" name="tu_nombre"><br><br>

    <label>Tu email:</label><br>
    <input type="text" name="tu_email"><br><br>

    <label>Email de tu amigo:</label><br>
    <input type="text" name="amigo_email"><br><br>

    <input type="submit" name="submit" value="Recomendar">
  </form>
</body>
</html>
<?php } ?>
