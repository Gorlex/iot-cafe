<html>
<!-- Recibe la variable del formulario -->

<?php $id_sensor = $_POST["id_sensor"]; ?>
<?php $temperatura = $_POST["temperatura"]; ?>
<!-- Cierra recepción de la variable del formulario -->
<body>

El identificador del sensor es: <?php echo $id_sensor ; ?> 
<br>
La lectura de temperatura es: <?php echo $temperatura ; ?>
<br>
<a href="form-tem.html">
    <button>Regresar</button>
  </a> 
  <br>
<!-- Realizar envio de datos a la base de datos -->
<?php

include("conec.php");

$insertar = "INSERT INTO medidas_ambiente (sensor, medida) VALUES('$id_sensor', '$temperatura')";
$query = mysqli_query($con, $insertar);

if ((($query = mysqli_query($con, $insertar))) === false) { 
    die(mysqli_error($con));
}

?>
<!-- Termina envio de datos a la base de datos -->






</body>




</html>