
<?php
//conexión con la base y selección de la base de datos
include 'connectvars.php';

$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

//traigo los datos del formulario

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dni = $_POST["dni"];
$email = $_POST["email"];
$city = $_POST["city"];

//ejecución de la sentencia sql
mysqli_query($conexion, "INSERT INTO listado (firstname,lastname,dni,email,city)
VALUES ('$firstname','$lastname','$dni','$email','$city')");
 header("Location: index.php");


?>


