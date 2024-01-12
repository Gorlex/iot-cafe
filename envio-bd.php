<!-- Realizar envio de datos a la base de datos -->
<?php



function envio($valor_id_sensor, $valor_medida,$con)
{
      
    $insertar = "INSERT INTO temperatura (sensor, medida) VALUES('$valor_id_sensor', '$valor_medida')";
    if ((($query = mysqli_query($con, $insertar))) === false) { 
       die(mysqli_error($con));
    }
}

?>
<!-- Termina envio de datos a la base de datos -->
