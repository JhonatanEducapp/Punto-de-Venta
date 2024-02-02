<?php
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "procomin";
    //$host = "localhost";
    //$user = "id20408079_marco";
    //$clave = "331312@//Ma";
    //$bd = "id20408079_prestamos";
    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");

?>
