<?php
    //Web
    // $host = "betaproject.ar";
    // $user = "u375391241_berazategui";
    // $clave = "mmY5kpMU6XZeuBx";
    // $bd = "u375391241_sis_venta";

    //Xampp
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "ventuli";

    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
?>
