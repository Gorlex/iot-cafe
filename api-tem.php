<html>
<!-- Recibe la variable del formulario -->

<?php $id_sensor = $_GET["id_sensor"]; ?>
<?php $temperatura = $_GET["temperatura"]; ?>
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
    
    include("envio-bd.php");

$tabla = "temperatura";
envio_db($tabla, $id_sensor, $temperatura);
?>
<!-- Termina envio de datos a la base de datos -->






</body>




</html>