<?php

session_start();

$link = mysqli_connect("localhost","root", "");

mysqli_select_db($link, "Compras");

$resultado = mysqli_query($link, "SELECT * FROM catalogo");

while($fila = mysqli_fetch_array($resultado))
{

echo $fila['producto'];
echo " $".$fila['precio'];
echo " ";
echo "<a href='agregar.php? id=".$fila['id']."'>Agregar</a>";
echo "<br>";

}

echo "<br>";
echo "<a href='carrito.php'> Ver Carrito </a>";
?>