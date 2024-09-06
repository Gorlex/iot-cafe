<?php

    include("conec.php");
        
    $busqueda = $_GET['busqueda'];
    $tabla='temperatura';


    $consulta = "SELECT * FROM  $tabla WHERE id LIKE '%" . $busqueda . "%'";
    $result = $con->query($consulta);
    
    // Mostrar los resultados
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
         //  echo "<b>SENSOR</b>&nbsp;&nbsp;&nbsp;&nbsp;" . " " . "<b>MEDIDA</b>&nbsp;&nbsp;" . "<b>TIEMPO</b>&nbsp;&nbsp;" . "<br>";
         //   echo $row["sensor"] . "&nbsp;&nbsp;" . $row["medida"] . "&nbsp;&nbsp;&nbsp;&nbsp;" . $row["tiempo"] . "<br>";
       
          echo  "<table>";
          echo      "<tr>";
          echo          "<th>ID</th>";
          echo          "<th>SENSOR</th>";
          echo          "<th>MEDIDA</th>";
          echo          "<th>TIEMPO</th>";
          echo      "</tr>";

          echo      "<tr>";
          echo    "<td>" . $row["id"] . "</td>";
          echo    "<td>" . $row["sensor"] . "</td>";
          echo    "<td>" . $row["medida"] . "</td>";
          echo    "<td>" . $row["tiempo"] . "</td>";
              
          echo      "</tr>";
            
          echo "</table>";
       
       
       
       
       
       
        }
    } else {
        echo "<h2> No se encontraron resultados </h2>";
    }

    $con->close();
  
 
?>
<html>
     <head>
         <title>Busquedas</title>
         
         <script src="script.js" defer></script>
         <meta http-equiv="Content-Type" content="text/html;" charset="UTF-8" />
         
     </head>
     <body>
            <br>
            <br>
            <br>
            <br>
            <button onclick=window.location.href="consulta-datos.html"><-- Regresar</button> 
     </body>
</html> 