//Listado con paginacion
<?php
$link = mysqli_connect("localhost","root","") or die ("ERROR AL CONECTAR A LA BASE DE DATOS".mysqli_connect_error());
$select = mysqli_select_db($link,"capitales") or die ("error al seleccionar data base".mysqli_error($link));
$cant_por_pag = 2;
$pagina = isset($_GET['pagina'])? $_GET['pagina']:null;

if (!$pagina) {
$inicio = 0;
$pagina = 1;
}
else {
    $inicio = ($pagina -1)*$cant_por_pag;
}

$sql = "SELECT * FROM ciudades";
$result = mysqli_query($link,$sql);
$total_registros = mysqli_num_rows($result);
$total_paginas = ceil($total_registros/$cant_por_pag);
echo "Numero de registros encontrados: ". $total_registros."<br>";
echo "Se muestran paginas de". $cant_por_pag."registros cada una <br>";
echo "Mostrando la página".$pagina."de".$total_paginas."<p";

$sql = "SELECT * FROM ciudades"."limit".$inicio.",".$cant_por_pag;
$result = mysqli_query($link,$sql) or die ("ERROR EN LA CONSULTA". mysqli_error($link));
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
        </td>
    </tr>   
   </table>
   <?php
   if($total_paginas > 1){
       for ($i=1; $i<=$total_paginas; $i++){
           if($pagina == $i){
               echo $pagina." ";
           }
           else {
               echo "<a href='formLISTADO-PAG.php?pagina=".$i."'>".$i."</a> ";
           }
       }
   }
?>
<p align="center">Volver al menú<a href="index.html"></a></p>
</body>
</html>
   
