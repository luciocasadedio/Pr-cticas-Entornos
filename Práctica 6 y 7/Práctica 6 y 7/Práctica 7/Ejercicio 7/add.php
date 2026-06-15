<?php

session_start();

$_SESSION['carrito'][] = $_GET['id'];
header("Location: catalogo.php");

?>