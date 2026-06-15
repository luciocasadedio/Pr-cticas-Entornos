//Ejercicio 1
<?php
if(isset($_POST["estilo"])){
$estilo = $_POST["estilo"];    
setcookie("estilo",$estilo,time()+ (60));
} else{
    if(isset($_COOKIE["estilo"])){
    $estilo = $_COOKIE["estilo"];
    }
}
if(isset($estilo)){
    echo '<link rel="stylesheet" type="text/css" href="'.$estilo.'.css">';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<h1>Estilo<?php echo $estilo ?></h1>
<form action="" method="POST" name="cambiar estilos">
<tr>
    <td>
<select name="estilo">
        <option value="estilo1">Estilo 1
        <option value="estilo2">Estilo 2
        <option value="estilo3">Estilo 3
    </select>
    </td>
</tr>
<tr colspan="5" align="center">
 <input type="submit" value="Actualizar estilo">
</tr>    
</form>
</body>
</html>