//Ejercicio 2 - Contador de visitas con cookies 
<?php
setcookie("contador",$_COOKIE["contador"]+1,time()+ (60));
if($_COOKIE["contador"]==0){
    echo "<h1>Bienvenido Usuario!!</h1>";
}
else{
    $_SESSION["contador"]=$_SESSION["contador"]+1;
    echo "<h1>Bienvenido de nuevo!!</h1>";
    echo "<h2>Has visitado esta página ".$_COOKIE["contador"]." veces</h2>";}
?>
