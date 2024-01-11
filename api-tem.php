<html>
<!-- Recibe la variable del formulario -->
<?php $_POST["id_sensor"] = $id_sensor; ?>
<?php echo $_POST["temperatura"] = $temperatura; ?>

<body>

El identificador del sensor es <?php echo $id_sensor ; ?> 
<br>
La lectura de temperatura es: <?php echo $temperatura ; ?>

</body>
</html>