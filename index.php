       <?php // https://petticoated-link.000webhostapp.com/
        $titulo= 'Lectura de tabla de alumnos';
        include "header.php";
           include 'connectvars.php';

//conectamos la base de datos
     $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
//ejecutamos la sentencia sql
        $result = mysqli_query($conexion, "SELECT * from listado");
        ?>
        <table  border="1">
            <tr>
                <th>first name</th>
                <th>last name</th>
                <th>dni</th>
                <th>email</th>
                <th>city</th>
            </tr>
            <?php
//mostramos los registros con un bucle while
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo '<td>' . $row["firstname"] . '</td>';
                echo '<td>' . $row["lastname"] . '</td>';
                echo '<td>' . $row["dni"] . '</td>';
                echo '<td>' . $row["email"] . '</td>';
                echo '<td>' . $row["city"] . '</td>';
                echo "</tr>";
            } 
            mysqli_free_result($result);
        
           ?>

        </table>
        <nav>
            <ul>
                <li><a href="agregar2.php">Agregar un registro</a></li>
                <li><a href="actualizar.php">Actualizar un registro</a></li>
                <li><a href="borrar.php">Borrar un registro</a></li>
                <li><a href="descargar_excel.php">Descargar Excel  <img src="excel2-svgrepo-com.svg" width="16" height="16"></a></li>
                <li><a href="comentarios_usuarios.php">Comentarios de usuarios</a></li>
            </ul>
        </nav>
        <?php 
if (isset($_POST['submit'])) {
    $usuario = $_POST['usuario'];
    $comentario = $_POST['comentario'];
    $date = $_POST['date'];
}
  ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
      <label>Usuario:</label>
      <input type="text" name="usuario"  /><br />
      <textarea name="comentario" rows="3" cols="29" placeholder= "Comentario..."></textarea>
      <input type="hidden" name="date" value="<?php echo date('j F Y H:i e P'); ?>" /><br>
      <input type="submit" value="Enviar comentarios" name="submit" />
      <label for=""><?php if (isset($_POST['submit'])) {echo "  Comentarios enviados exitosamente";} ?></label>
    </fieldset>
</form>

  <?php 
  if (isset($_POST['submit'])) {
  $archivo = fopen("comentario.txt", 'a+') or die("Failed to open file");
  $datos= "Fecha: $date\nUsuario: $usuario\nComentario: $comentario\n\n";
      fwrite($archivo, "$datos") or die("Could not write to file");
      fclose($archivo);
}
?>

<?php
include "footer.php";
?>