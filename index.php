
        <?php
        $titulo= 'Lectura de tabla de alumnos';
        include "header.php";
           include 'connectvars.php';

//conectamos la base de datos
     $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 

//ejecutamos la sentencia sql
        $result = mysqli_query($conexion, "SELECT * from listado");
        ?>
        <table align="center" border="1">
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
            mysqli_free_result($result)
           //mysqli_close($conexion);

            ?>
        </table>
        <nav>
            <ul>
                <li><a href="agregar2.php">Agregar un registro</a></li>
                <li><a href="actualizar.php">Actualizar un registro</a></li>
                <li><a href="borrar.php">Borrar un registro</a></li>
                <li><a href="descargar_excel.php">Descargar Excel  <img src="excel2-svgrepo-com.svg" width="16" height="16"></a></li>
            </ul>
        </nav>
<?php
        include "footer.php";
        ?>