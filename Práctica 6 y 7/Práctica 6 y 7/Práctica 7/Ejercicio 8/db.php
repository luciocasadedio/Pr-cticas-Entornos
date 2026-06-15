<?php

$link = mysqli_connect("localhost", "root","");

mysqli_select_db($link,"musica");

$resultado = mysqli_query($link, "SELECT * FROM buscador WHERE canciones LIKE '%$_POST[buscar]%'");

while($fila = mysqli_fetch_array($resultado))
{
echo $fila['canciones'];
echo "<br>";
}

mysqli_close($link);

?>