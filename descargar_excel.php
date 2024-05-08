<?php 
include 'connectvars.php';
$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 


  $query=mysqli_query($conexion,"SELECT * FROM listado");
  
  header("content-type: application/vnd.ms-excel");
  header("content-disposition: attachment; filename=detalles.xls");
  header("pragma: no-cache");
  header("expires: 0"); 
  
  echo"<table border=1>";
  echo "<tr>";
  echo "<th colspan=5>reporte de detalle<th>";
  echo "</tr>";
  echo "<tr><th>firstname</th><th>lastname</th><th>dni</th><th>email</th><th>city</th></tr>";
  while($row=mysqli_fetch_array($query)){
    echo "<tr>";
    echo '<td>' . $row["firstname"] . '</td>';
    echo '<td>' . $row["lastname"] . '</td>';
    echo '<td>' . $row["dni"] . '</td>';
    echo '<td>' . $row["email"] . '</td>';
    echo '<td>' . $row["city"] . '</td>';
    echo "</tr>";
}
echo "</table>";
?>

