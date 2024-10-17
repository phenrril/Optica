<?php
include "../conexion.php";

if (isset($_POST['data'])) {
    $data = json_decode($_POST['data'], true);

    foreach ($data as $row) {
        $dni_cliente = $row['dni_cliente'];
        $fecha = $row['fecha'];
        $od_l_1 = $row['od_l_1'];
        $od_l_2 = $row['od_l_2'];
        $od_l_3 = $row['od_l_3'];
        $od_c_1 = $row['od_c_1'];
        $od_c_2 = $row['od_c_2'];
        $od_c_3 = $row['od_c_3'];
        $oi_l_1 = $row['oi_l_1'];
        $oi_l_2 = $row['oi_l_2'];
        $oi_l_3 = $row['oi_l_3'];
        $oi_c_1 = $row['oi_c_1'];
        $oi_c_2 = $row['oi_c_2'];
        $oi_c_3 = $row['oi_c_3'];
        $addg = $row['addg'];
        $armazon = $row['armazon'];
        $precio = $row['precio'];
        $observaciones = $row['observaciones'];

        $query = mysqli_query($conexion, "INSERT INTO historia_clinica (dni_cliente, fecha, od_l_1, od_l_2, od_l_3, od_c_1, od_c_2, od_c_3, oi_l_1, oi_l_2, oi_l_3, oi_c_1, oi_c_2, oi_c_3, addg, armazon, precio, observaciones) VALUES ('$dni_cliente', '$fecha', '$od_l_1', '$od_l_2', '$od_l_3', '$od_c_1', '$od_c_2', '$od_c_3', '$oi_l_1', '$oi_l_2', '$oi_l_3', '$oi_c_1', '$oi_c_2', '$oi_c_3', '$addg', '$armazon', '$precio', '$observaciones')");

        if (!$query) {
            echo 'error';
            mysqli_close($conexion);
            exit;
        }
    }

    echo 'success';
} else {
    echo 'error';
}

mysqli_close($conexion);
?>