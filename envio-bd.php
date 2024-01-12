<!-- Realizar envio de datos a la base de datos -->
<?php



function envio_db($tabla, $valor_id_sensor, $valor_medida)
{
    include("conec.php");
      
    $insertar = "INSERT INTO $tabla (sensor, medida) VALUES('$valor_id_sensor', '$valor_medida')";
    if ((($query = mysqli_query($con, $insertar))) === false) { 
       die(mysqli_error($con));
    }
}

?>
<!-- Termina envio de datos a la base de datos -->
