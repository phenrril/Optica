<?php
include "../conexion.php";

if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];
    $query = mysqli_query($conexion, "SELECT * FROM historia_clinica WHERE dni_cliente = '$dni'");
    $result = mysqli_num_rows($query);

    if ($result > 0) {
        while ($data = mysqli_fetch_assoc($query)) {
            echo '<tr>';
            echo '<td>' . $data['fecha'] . '</td>';
            //Ojo Derecho
            echo '<td>' . $data['od_l_1'] . '</td>';
            echo '<td>' . $data['od_l_2'] . '</td>';
            echo '<td>' . $data['od_l_3'] . '</td>';
            echo '<td>' . $data['od_c_1'] . '</td>';
            echo '<td>' . $data['od_c_2'] . '</td>';
            echo '<td>' . $data['od_c_3'] . '</td>';
            //Ojo Izquierdo
            echo '<td>' . $data['oi_l_1'] . '</td>';
            echo '<td>' . $data['oi_l_2'] . '</td>';
            echo '<td>' . $data['oi_l_3'] . '</td>';
            echo '<td>' . $data['oi_c_1'] . '</td>';
            echo '<td>' . $data['oi_c_2'] . '</td>';
            echo '<td>' . $data['oi_c_3'] . '</td>';
            //Demas Datos
            echo '<td>' . $data['addg'] . '</td>';
            echo '<td>' . $data['armazon'] . '</td>';
            echo '<td>' . $data['precio'] . '</td>';
            echo '<td>' . $data['observaciones'] . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="9">No se encontraron registros</td></tr>';
    }
} else {
    echo '<tr><td colspan="9">DNI no proporcionado</td></tr>';
}

mysqli_close($conexion);
?>