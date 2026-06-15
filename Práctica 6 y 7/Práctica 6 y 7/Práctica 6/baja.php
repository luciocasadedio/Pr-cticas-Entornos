// Baja de capitales
<?php
$link = mysqli_connect("localhost","root","") or die ("ERROR AL CONECTAR A LA BASE DE DATOS".mysqli_connect_error());
$select = mysqli_select_db($link,"capitales") or die ("error al seleccionar data base".mysqli_error($link));

$ciudad = $_POST["ciudad"]; // Asigno ciudad del formulario
$query = "SELECT * FROM ciudades where ciudad='$ciudad'";
$result = mysqli_query($link,$query) or die ("ERROR EN LA CONSULTA". mysqli_error($link));

//Valida que la ciudad exista
if (mysqli_num_rows($result)==0){
    echo ("Ciudad inexistente");
    echo ("<a href='index.html'>Continuar</a>");
}else {
//Borrar ciudad
$query = "DELETE FROM ciudades where ciudad = '$ciudad'";
$result = mysqli_query($link,$query);
echo "La ciudad fue borrada";
echo ("<a href='index.html'>Volver a menú</a>");
}
mysqli_free_result($result);
mysqli_close($link);
?>

  
                


