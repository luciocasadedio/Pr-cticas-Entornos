//Modificación de todo buscando si no existe previamente 
<?php
$link = mysqli_connect("hostname","root","") or die ("Error al conectar". mysqli_connect_error());
$select = mysqli_select_db($link,"capitales") or die ("error al seleccionar DB".mysqli_error($link));
$ciudad = $_POST['ciudad'];
$query = "SELECT * FROM ciudades where ciudad='$ciudad' ";
$result = mysqli_query($link,$query) or die ("error en la consulta.". mysqli_error($link));
$extraido = mysqli_fetch_array($result);
if(mysqli_num_rows($result) == 0){
echo "ciudad inexistente <br>";
echo ("<a href='index.html'>Continuar</a>");
} 
else{
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Modificar Capital</title>
    </head>
    <body>
    <h1>Modificación</h1>
    <form action="modificar.php" method="POST" name="form_modifcacion">
    <table width = "225">
    <tr>
        <td>Ciudad</td>
        <td><input type="text" name="ciudad" required size="20" maxlength="40" value="<?php echo($extraido['ciudad']); ?>"></td>
    </tr>
    <tr>
        <td>País:</td>
        <td><input type="text" name="pais" required size="20" maxlength="40" value="<?php echo($extraido['pais']); ?>"></td>
    </tr>
    <tr>
        <td>Habitantes:</td>
        <td><input type="number" name="habitantes" required size="20" maxlength="40" value="<?php echo($extraido['habitantes']); ?>"></td>
    </tr>
    <tr>
        <td>Superficie:</td>
        <td><input type="number" name="superficie" required size="20" maxlength="40" value="<?php echo($extraido['superficie']); ?>"></td>
    </tr>
    <tr>
        <td>Tiene metro?:</td>
        <td><input type="checkbox" name="metro" value="<?php echo($extraido['metro']); ?>"></td>
    </tr>
    <tr>
    <td colspan="3" align="center"><input type="submit" value="modificar"></td>
    </tr>
    </table>
    </form>
    </body>
</html>
<?php
}
mysqli_free_result($result);
mysqli_close($link);
?>