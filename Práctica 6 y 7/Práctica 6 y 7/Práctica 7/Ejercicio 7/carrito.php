<?php

session_start();

echo "<h2>Carrito</h2>";

if(isset($_SESSION['carrito']))
{

    foreach($_SESSION['carrito'] as $producto)
    {
        echo "Producto ID: ";
        echo $producto;
        echo "<br>";
    }

}
else
{
    echo "Carrito vacío";
}

?>