
        <?php
         $titulo= 'Eliminar un registro';
        include "header.php";
       
//conexión con la base y selección de la base de datos
include 'connectvars.php';

        $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

        ?>
        <form method="post" action="eliminar_registro.php">
            <?php
//creamos la sentencia sql y la ejecutamos
            $ssql = "SELECT dni, firstname FROM listado ORDER BY firstname";
            $result = mysqli_query($conexion, $ssql);
            ?>
            <select name="dni">
                <?php
//mostramos los registros en forma de menú desplegable
                while ($row = mysqli_fetch_array($result)) {
                    echo '<option value="' . $row['dni'] . '">' . $row["firstname"] . '</option>';
                } 
                mysqli_free_result($result);
                mysqli_close($conexion);

                ?>
            </select>
            <input type="submit" value="Eliminar">
            <label for=""><?php if (isset($_POST['submit'])) {echo "  Registro eliminado";} ?></label>

        </form>
        <ul>
            <li><a href="index.php">Volver a la lista de Alumnos</a></li>
        </ul>
        
    <?php
include "footer.php";
    ?>