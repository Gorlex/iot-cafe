<?php

    include("conec.php");
        
    $busqueda = $_GET['busqueda'];
    $tabla='temperatura';


    $consulta = "SELECT * FROM  $tabla WHERE id LIKE '%" . $busqueda . "%'";
    $result = $con->query($consulta);
    
    // Mostrar los resultados
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "sensor" . " " . "medida" . "<br>";
            echo $row["sensor"] . " " . $row["medida"] . "<br>";
        }
    } else {
        echo "No se encontraron resultados";
    }

    $con->close();
  
 
?>
<html>
     <head>
         <title>wordle PPY</title>
         
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