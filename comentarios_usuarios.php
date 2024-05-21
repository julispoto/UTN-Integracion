<?php
        $titulo= 'Comentarios de usuarios';
        include "header.php";
?>

<?php
// poner el contenido de un fichero en una cadena
$nombreFichero = "comentario.txt";
$gestor = fopen($nombreFichero, "r");
$contenido = fread($gestor, filesize($nombreFichero));
echo "<pre>";
echo $contenido;
echo "</pre>";
fclose($gestor);
?>
<li><a href="index.php">Volver a la lista de Alumnos</a></li>

<?php
include "footer.php";
?>