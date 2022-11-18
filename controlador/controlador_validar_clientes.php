<?php

if (!empty($_POST['validarC'])) {



    $sql=$conexion->query(" INSERT INTO pacientes (dni_P, nombre_P, apellido_P, domicilio_P, telefono_P, obra_S, fecha_P, medico_P) VALUES ('$dni', '$nombre', '$apellido', '$domicilio', '$telefono', '$obra', '$fecha', '$medico')");
    //if (mysqli_query($conexion, $sql)) {
 //echo "New record created successfully";
 if ($sql) {
    echo "<script>alert('Cliente agregado correctamente')</script>";
    echo "<script>window.location='clientes.php'</script>";
} else {
    echo "<script>alert('Error al agregar cliente')</script>";
    echo "<script>window.location='clientes.php'</script>";
}

}


    // if (!empty($_POST['validarC'])) { 
    //     if (!empty($_POST['dniC']) and is_numeric($_POST['dniC']) or !empty($_POST['nombreC']) or !empty($_POST['apellidoC']) or !empty($_POST['domicilioC']) or !empty($_POST['telefonoC'])) {
    //         $dni = $_POST['dniC'];
    //         $nombre = $_POST['nombreC'];
    //         $apellido = $_POST['apellidoC'];
    //         $domicilio = $_POST['domicilioC'];
    //         $telefono = $_POST['telefonoC'];
    //         $obra = $_POST['obraC'];
    //         $fecha = $_POST['fechaC'];
    //         $medico = $_POST['medicoC'];
    //         $sql = $conexion->query(" INSERT INTO pacientes (dni_P, nombre_P, apellido_P, domicilio_P, telefono_P, obra_S, fecha_P, medico_P) VALUES ('$dni', '$nombre', '$apellido', '$domicilio', '$telefono', '$obra', '$fecha', '$medico')");
    //         if ($sql) {
    //             echo "<script>alert('Cliente agregado correctamente')</script>";
    //             echo "<script>window.location='clientes.php'</script>";
    //         } else {
    //             echo "<script>alert('Error al agregar cliente')</script>";
    //             echo "<script>window.location='clientes.php'</script>";
    //         }
    //     } else {
    //         echo "<div class='alert alert-danger'>Datos Erroneos </div>";
    //     }
    // }

?>