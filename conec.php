<?php

function conectar(){

    $host = "localhost";
    $user ="root";
    $pass ="raspberrypi";
    $bd ="medidas_ambiente";
    $con=mysqli_connect($host,$user,$pass);
    mysqli_select_db($con,$bd);
    return $con;

    if (!$con) {
        echo "Error: No se pudo conectar a MySQL. Error " . mysqli_connect_errno() . " : ". mysqli_connect_error() . PHP_EOL;
        die;
    }
    else {echo "Conexión realizada correctamente";}

}
conectar();


?>
