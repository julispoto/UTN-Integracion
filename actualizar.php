
<?php
$titulo="Modificar un registro";
include "header.php";
//conexión con la base y selección de la base de datos
include 'connectvars.php';

$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

?>
<form method="post" action="modificar_registro.php">
<?php
//creamos la sentencia sql y la ejecutamos
$ssql = "SELECT dni, firstname FROM listado ORDER BY dni";
$result = mysqli_query($conexion, $ssql);
?>
<select name="dni">
<?php
//generamos el menu desplegable
while ($row = mysqli_fetch_array($result)) {
echo '<option value="' . $row['dni'] . '">' . $row["firstname"] . '</option>';
} 
?>
</select>
<input type="text" name="email" placeholder="email">
<input type="text" name="city" placeholder="city">
<input type="submit" value="Modificar">
</form>
<ul>
<li><a href="index.php">Volver a la lista de Alumnos</a></li>
</ul>
<?php
include "footer.php";
?>