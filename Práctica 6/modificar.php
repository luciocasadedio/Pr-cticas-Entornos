//Modifico campos con base de datos
<?php
$link = mysqli_connect("hostname","root","") or die ("Error al conectar". mysqli_connect_error());
$select = mysqli_select_db($link,"capitales") or die ("error al seleccionar DB".mysqli_error($link));
//CAPTURO DATOS DEL FORM ANTERIOR DE MODIFICACION_BUSCA.PHP
$ciudad = $_POST["ciudad"];
$capital = $_POST["capital"];
$habitantes = $_POST ["habitantes"];
$superficie = $_POST["superficie"];
$metro = isset($_POST["metro"]) ? 1:0;
// armo consulta sql y ejecuto
$query = "UPDATE ciudades set capital='$capital',habitantes='$habitantes',superficie='$superficie',metro='$metro' where ciudad='$ciudad'";
$result = mysqli_query($link,$query) or die ("error en realizar la consulta: <a href='index.html'>Volver al menú</a> " . mysqli_error($link));
echo("el usuario fue modificado <br>");
echo("<a href='index.html'>Volver al menú</a>");

mysqli_free_result($result);
mysqli_close($link);
?>