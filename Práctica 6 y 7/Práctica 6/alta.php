<?php
$link = mysqli_connect("localhost","root","") or die("Error al conectar a la base de datos: " . mysqli_connect_error());
mysqli_select_db($link, "Capitales") or die("Error al seleccionar la base de datos: " . mysqli_error($link));
// seleccionar base de datos y conectar

if (!empty($_POST["ciudad"]) && !empty($_POST["pais"])) {
$ciudad = $_POST["ciudad"];
$pais = $_POST["pais"];
$habitantes = $_POST["habitantes"];
$superficie = $_POST["superficie"];
$metro = isset($_POST["metro"]) ? 1: 0;

//Consulta si existe
$s_query = "SELECT * FROM Ciudades WHERE ciudad='$ciudad'";
$result = mysqli_query($link, $s_query) or die("Error al ejecutar la consulta: " . mysqli_error($link));
$cant_ciudades = mysqli_fetch_assoc($result);


if ($cant_ciudades && $cant_ciudades["ciudad"] == $ciudad) {
    echo "La ciudad ya existe en la base de datos.";
    echo "<a href='index.html'>Volver al formulario</a>";
} else {
    //Inserta valores
    $insert_query = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, metro) VALUES ('$ciudad', '$pais', '$habitantes', '$superficie', '$metro')";
    mysqli_query($link, $insert_query) or die("Error al insertar los datos: " . mysqli_error($link));
    echo "Ciudad agregada correctamente.";
    echo "<a href='index.html'>Volver al formulario</a>";
}
// liberar memoria
mysqli_free_result($result);
} else{
    echo "faltan completar campos obligatorios";
    echo "<a href='index.html'>Volver al formulario</a>";
}

//cerrar conexion
mysqli_close($link);

?>
