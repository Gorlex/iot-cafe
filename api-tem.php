<html>
<!-- Recibe la variable del formulario -->

<?php $id_sensor = $_POST["id_sensor"]; ?>
<?php $temperatura = $_POST["temperatura"]; ?>

<body>

El identificador del sensor es: <?php echo $id_sensor ; ?> 
<br>
La lectura de temperatura es: <?php echo $temperatura ; ?>

</body>
</html>