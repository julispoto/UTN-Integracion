<?php
include 'connectvars.php';

//pasamos los datos del formulario
$dni = $_POST["dni"];
$email = $_POST["email"];
$city = $_POST["city"];
//conexión con la base y selección de la base de datos
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

//creamos la sentencia sql y la ejecutamos
$ssql="UPDATE listado SET email='$email', city='$city' WHERE dni=$dni";
mysqli_query($conexion, $ssql);
header("Location: index.php");
?>