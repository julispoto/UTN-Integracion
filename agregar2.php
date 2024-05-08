<?php
$titulo= "Agregar un registro en la base de datos";
include "header.php";
?>

<form method="post" action="agregar.php">
<input type="text" name="firstname" placeholder="firstname"><br>
<input type="text" name="lastname" placeholder="lastname"><br>
<input type="text" name="dni" placeholder="dni"><br>
<input type="text" name="email" placeholder="email"><br>
<input type="text" name="city" placeholder="city"><br>
<input type="submit" value="Agregar">
</form>
<ul>
<li><a href="index.php">Volver a la lista de Alumnos</a></li>
</ul>
<?php
include "footer.php";
?>

