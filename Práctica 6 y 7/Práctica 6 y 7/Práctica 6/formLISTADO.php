<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta de capitales</title>
    </head>
    <body>
    <?php
    $link = mysqli_connect("localhost","root","") or die ("ERROR AL CONECTAR A LA BASE DE DATOS".mysqli_connect_error());
    $select = mysqli_select_db($link,"capitales") or die ("error al seleccionar data base".mysqli_error($link));
    $query = "SELECT * FROM ciudades";
    $result = mysqli_query($link,$query) or die ("ERROR EN LA CONSULTA". mysqli_error($link));
    $total_registros = mysqli_num_rows($result);
    ?>
    <table border ="1" width="50%">
    <tr>      
        <td><b>Ciudad</b></td>
        <td><b>País</b></td>
        <td><b>Habitantes</b></td>
        <td><b>Superficie</b></td>
        <td><b>Metro</b></td>
    </tr>
    <?php
    while ($fila=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo ($fila['ciudad']); ?></td>
        <td><?php echo ($fila['país']); ?></td>
        <td><?php echo ($fila['habitantes']); ?></td>
        <td><?php echo ($fila['superficie']);?></td>
        <td><?php echo ($fila['metro']); ?></td>
    </tr>
    <tr>
        <td colspan="5">
    <?php
    }
    mysqli_free_result($result);
    mysqli_close($link);
    ?>
    <p align="center">Volver al menú<a href="index.html"></a></p>
    </body>
</html>