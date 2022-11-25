<?php 

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
// controlador agregar cliente----------------------------------------

if (!empty($_POST['agregarC'])) {
    if (!empty($_POST['dniC']) and is_numeric($_POST['dniC']))   {
        $dni=$_POST['dniC'];
        $sql=$conexion->query(" SELECT dni_P FROM pacientes WHERE dni_P='$dni' ");
        if ($datos=$sql->fetch_object()) {
            echo "<div class='alert alert-danger'>Cliente ya existe </div>";
        } 
        else {
            echo "DNI <input name='dniCliente' style='width: 200px' value='' type='text' class='form-control' autofocus >";
            echo "Nombre <input name='nombreC' style='width: 200px' value='' type='text' class='form-control'  >";
            echo "Apellido <input name='apellidoC' style='width: 200px' value='' type='text' class='form-control'  >";
            echo "Domicilio <input name='domicilioC' style='width: 200px' value='' type='text' class='form-control'  >";
            echo "Telefono <input name='telefonoC' style='width: 200px' value='' type='text' class='form-control'  >";
            echo "Obra Social <input name='obraC' style='width: 200px' value='' type='text' class='form-control'  >";
            echo "Medico <input name='medicoC' style='width: 200px' value='' type='text' class='form-control'  >";
            echo "<input name='fechaC' style='visibility:hidden' style='width: 200px' value='' type='text' class='form-control' disabled  >";
        }
    }
    else {
        echo "<div class='alert alert-danger'>Datos Erroneos </div>";
    } 
}

// controlador validar clientes---------------------------------------

if (!empty($_POST['validarC']) and !empty($_POST['dniCliente']) and is_numeric($_POST['dniCliente'])) {
    if(is_numeric ($_POST['dniCliente'])){
    $dni = $_POST['dniCliente'];
    }
    else {
        echo "<div class='alert alert-danger'>DNI debe ser numerico </div>";
    }
    $nombre = $_POST['nombreC'];
    $apellido = $_POST['apellidoC'];
    $domicilio = $_POST['domicilioC'];
    if(is_numeric ($_POST['telefonoC'])){
    $telefono = $_POST['telefonoC'];
    }
    else {
        echo "<div class='alert alert-danger'>Telefono debe ser numerico </div>";
    }
    $obra = $_POST['obraC'];
    $fcha = date("Y-m-d");
    $fecha = $fcha;
    $medico = $_POST['medicoC'];
    
    $sql=$conexion->query(" INSERT INTO pacientes (dni_P, nombre_P, apellido_P, domicilio_P, telefono_P, obra_S, fecha_P, medico_P) VALUES ('$dni', '$nombre', '$apellido', '$domicilio', '$telefono', '$obra', '$fecha', '$medico')");
 if ($sql) {    
    $sql=$conexion->query(" SELECT * FROM pacientes WHERE dni_P='$dni' ");
    if ($datos=$sql->fetch_object()) {
            $_SESSION['idcliente']=$datos->id;
            $_SESSION['nombre_P']=$datos->nombre_P;
            $_SESSION['apellido_P']=$datos->apellido_P;
    }



    echo "<script>alert('Cliente agregado correctamente')</script>";
    echo "<script>window.location='cobros.php'</script>";

} else {
    echo "<script>alert('Error al agregar cliente')</>";
    echo "<script>window.location='clientes.php'</script>";
    unset($dni, $nombre, $apellido, $domicilio, $telefono, $obra, $fecha, $fcha, $medico);
}
}
// Boton Cancelar------------------------------------------

if(!empty($_POST['cancelarC'])){
    echo "<a href='clientes.php'></a>";
    }
?>