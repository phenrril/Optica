<?php 

//session_start();
if (!empty($_POST['buscarC'])) {
	if (!empty($_POST['dniC']) and is_numeric($_POST['dniC']))   {
		$dni=$_POST['dniC'];
		$sql=$conexion->query(" SELECT * FROM pacientes WHERE dni_P='$dni' ");
		if ($datos=$sql->fetch_object()) {
			$_SESSION['idcliente']=$datos->id;
            $_SESSION['dni_P']=$datos->dni_P;
            $_SESSION['nombre_P']=$datos->nombre_P;
            $_SESSION['apellido_P']=$datos->apellido_P;
            $_SESSION['domicilio_P']=$datos->domicilio_P;
            $_SESSION['telefono_P']=$datos->telefono_P;
            $_SESSION['obra_S']=$datos->obra_S;
            $_SESSION['fecha_P']=$datos->fecha_P;
            $_SESSION['medico_P']=$datos->medico_P;

            echo "ID Cliente <input name='idcliente' style='width: 200px' value=" .  $_SESSION['idcliente'] .  " type='text' class='form-control'  disabled>";
            echo "DNI <input name='dniCliente' style='width: 200px' value=" .  $_SESSION['dni_P'] .  " type='text' class='form-control' disabled >";
            echo "Nombre <input name='nombreC' style='width: 200px' value=" .  $_SESSION['nombre_P'] .  " type='text' class='form-control' disabled >";
            echo "Apellido <input name='apellidoC' style='width: 200px' value=" .  $_SESSION['apellido_P'] .  " type='text' class='form-control' disabled >";
            echo "Domicilio <input name='domicilioC' style='width: 200px' value=" .  $_SESSION['domicilio_P'] .  " type='text' class='form-control'  disabled>";
            echo "Telefono <input name='telefonoC' style='width: 200px' value=" .  $_SESSION['telefono_P'] .  " type='text' class='form-control' disabled >";
            echo "Obra Social <input name='obraC' style='width: 200px' value=" .  $_SESSION['obra_S'] .  " type='text' class='form-control' disabled >";
            echo "Fecha <input name='fechaC' style='width: 200px' value=" .  $_SESSION['fecha_P'] .  " type='text' class='form-control' disabled  >";
            echo "Medico <input name='medicoC' style='width: 200px' value=" .  $_SESSION['medico_P'] .  " type='text' class='form-control'  disabled>";

        
		} 
        else {
			echo "<div class='alert alert-danger'>Cliente no existe </div>";
	}
	
}
else {
		echo "<div class='alert alert-danger'>Datos Erroneos </div>";
}

}

// controlador agregar cliente


if (!empty($_POST['agregarC'])) {
    if (!empty($_POST['dniC']) and is_numeric($_POST['dniC']))   {

       // echo "<div class='alert alert-danger'>HASTA ACA LLEGA </div>";

        echo "DNI <input name='dniCliente' style='width: 200px' value='' type='text' class='form-control'  >";
        echo "Nombre <input name='nombreC' style='width: 200px' value='' type='text' class='form-control'  >";
        echo "Apellido <input name='apellidoC' style='width: 200px' value='' type='text' class='form-control'  >";
        echo "Domicilio <input name='domicilioC' style='width: 200px' value='' type='text' class='form-control'  >";
        echo "Telefono <input name='telefonoC' style='width: 200px' value='' type='text' class='form-control'  >";
        echo "Obra Social <input name='obraC' style='width: 200px' value='' type='text' class='form-control'  >";
        echo "Fecha <input name='fechaC' style='width: 200px' value='' type='text' class='form-control' disabled  >";
        echo "Medico <input name='medicoC' style='width: 200px' value='' type='text' class='form-control'  >";
} 
    else {
        echo "<div class='alert alert-danger'>Datos Erroneos </div>";
    }
    


}
elseif (!empty($_POST['validarC'])and empty($_POST['dniCliente'])) {
    echo "<div class='alert alert-danger'>Faltan cargar datos  </div>";
}


// controlador validar clientes

if (!empty($_POST['validarC']) and !empty($_POST['dniCliente']) and is_numeric($_POST['dniCliente'])) {

    $dni = $_POST['dniCliente'];
    $nombre = $_POST['nombreC'];
    $apellido = $_POST['apellidoC'];
    $domicilio = $_POST['domicilioC'];
    $telefono = $_POST['telefonoC'];
    $obra = $_POST['obraC'];
    $fecha = $_POST['fechaC'];
    $medico = $_POST['medicoC'];
    
    //echo "<script>alert(". $_POST['dniCliente'] . ")</script>";
    
    $sql=$conexion->query(" INSERT INTO pacientes (dni_P, nombre_P, apellido_P, domicilio_P, telefono_P, obra_S, fecha_P, medico_P) VALUES ('$dni', '$nombre', '$apellido', '$domicilio', '$telefono', '$obra', '$fecha', '$medico')");
 if ($sql) {
    echo "<script>alert('Cliente agregado correctamente')</script>";
    echo "<script>window.location='clientes.php'</script>";
} else {
    echo "<script>alert('Error al agregar cliente')</script>";
    echo "<script>window.location='clientes.php'</script>";
    unset($dni, $nombre, $apellido, $domicilio, $telefono, $obra, $fecha, $medico);
}
}






// if (!empty($_POST['validarC'])) { 
//     if (!empty($_POST['dniC']) and is_numeric($_POST['dniC']) or !empty($_POST['nombreC']) or !empty($_POST['apellidoC']) or !empty($_POST['domicilioC']) or !empty($_POST['telefonoC'])  or !empty($_POST['fechaC'])) {
//         $dni = $_POST['dniC'];
//         $nombre = $_POST['nombreC'];
//         $apellido = $_POST['apellidoC'];
//         $domicilio = $_POST['domicilioC'];
//         $telefono = $_POST['telefonoC'];
//         $obra = $_POST['obraC'];
//         $fecha = $_POST['fechaC'];
//         $medico = $_POST['medicoC'];
//         $sql = $conexion->query(" INSERT INTO pacientes (dni_P, nombre_P, apellido_P, domicilio_P, telefono_P, obra_S, fecha_P, medico_P) VALUES ('$dni', '$nombre', '$apellido', '$domicilio', '$telefono', '$obra', '$fecha', '$medico')");
//         if ($sql == true) {
//             echo "<script>alert('Cliente agregado correctamente')</script>";
//             echo "<script>window.location='clientes.php'</script>";
//         } else {
//             echo "<script>alert('Error al agregar cliente')</script>";
//             echo "<script>window.location='clientes.php'</script>";
//         }
//     } else {
//         echo "<div class='alert alert-danger'>Datos Erroneos </div>";
//     }


// Boton Cancelar

if(!empty($_POST['cancelarC'])){
    echo "<a href='clientes.php'></a>";
    }




?>