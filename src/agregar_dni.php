<?php
include "../conexion.php";

if (isset($_POST['id']) && isset($_POST['dni'])) {
    $idCliente = $_POST['id'];
    $nuevoDNI = $_POST['dni'];
    $query = mysqli_query($conexion, "UPDATE cliente SET dni = '$nuevoDNI' WHERE idcliente = $idCliente");

    if ($query) {
        echo 'success';
    } else {
        echo 'error';
    }
}
mysqli_close($conexion);
?>