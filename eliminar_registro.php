<?php // eliminar registro
header("Location: index.php");

include 'connectvars.php';

//pasamos los datos del formulario
$dni = $_POST["dni"];
//conexión con la base y seleccion de la base de datos
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

//creamos la sentencia sql y la ejecutamos
$ssql="DELETE FROM listado WHERE dni='$dni'";
mysqli_query($conexion,$ssql);
mysqli_close($conexion);

?>