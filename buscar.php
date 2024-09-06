<?php

    include("conec.php");
        
    $busqueda = $_GET['busqueda'];
    $tabla='temperatura';


    $consulta = "SELECT * FROM  $tabla WHERE id LIKE '%" . $busqueda . "%'";
    $result = $con->query($consulta);
    
    // Mostrar los resultados
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row["sensor"] . " " . $row["medida"] . "<br>";
        }
    } else {
        echo "No se encontraron resultados";
    }

    $con->close();
  



?>