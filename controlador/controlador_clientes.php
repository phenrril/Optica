<?php 

//session_start();
if (!empty($_POST['buscarC'])) {
	if (!empty($_POST['dniC']) and is_numeric($_POST['dniC']))   {
		$dni=$_POST['dniC'];
		$sql=$conexion->query(" SELECT * FROM pacientes WHERE dni_P='$dni'");
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

            echo "<table WIDTH='100%' class='table table-borderless'>
            <tr>
                <td></td>
                <th>Busqueda de Cliente</th>
                <th></th>
            </tr> 
            <tr>
                <td>id cliente</td>
                <td><input id='text' value= " .  $_SESSION['idcliente'] .  "  name='text' type='text' class='form-control' spellcheck='false' data-ms-editor='true' disabled></td>
            </tr>
            <tbody>
                <tr>
                    <td>Nombre</td>
                    <td><input id='text' value= " .  $_SESSION['nombre_P'] .  " name='text' type='text' class='form-control' spellcheck='false' data-ms-editor='true' disabled></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input id='text' value= " .  $_SESSION['apellido_P'] .  " name='text' type='text' class='form-control' spellcheck='false' data-ms-editor='true' disabled></td>
                </tr>
                <tr>
                    <td>DNI</td>
                    <td><input id='text' name='text' value= " .  $_SESSION['dni_P'] .  " type='text' class='form-control' spellcheck='false' data-ms-editor='true' disabled></td>
                </tr>
                <tr>
                    <td>Domicilio</td>
                    <td><input id='text' name='text' value= " .  $_SESSION['domicilio_P'] .  " type='text' class='form-control' spellcheck='false' data-ms-editor='true' disabled></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input id='text' name='text' value= " .  $_SESSION['telefono_P'] .  " type='text' class='form-control' spellcheck='false' data-ms-editor='true' disabled></td>
                </tr>
                <tr>
                    <td>Obra Social</td>
                    <td><input id='text' name='text' value= " .  $_SESSION['obra_S'] .  " type='text' class='form-control' spellcheck='false' data-ms-editor='true' disabled></td>
                </tr>
                <tr>
                    <td>Medico</td>
                    <td><input id='text' name='text' value= " .  $_SESSION['medico_P'] .  " type='text' class='form-control' spellcheck='false' data-ms-editor='true' disabled></td>
                    <th scope='row'><button name='submit' type='submit' class='btn btn-primary'>Ir a Cobros</button></th>
                </tr>
            </tbody>
        </table>";


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

        echo "<div class='alert alert-danger'>HASTA ACA LLEGA </div>";
    }
        echo "<table WIDTH='100%'  id=agregar_cliente class='table table-borderless'>
            <tr>
                <td>
                <th>Nuevo Cliente </th>
            </tr>
            <tr>
                <td>id cliente</td>
                <td><input id='text' value='' name='id' type='text' class='form-control' disabled ></td>
            </tr>
            <tbody>
                <tr>
                    <td>Nombre</td>
                    <td><input name='nombreC' value='' type='text' class='form-control'  ></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input name='apellidoC' value='' type='text' class='form-control'></td>
                </tr>
                <tr>
                    <td>DNI</td>
                    <td><input name='dniC' value='' type='text' class='form-control'  ></td>
                </tr>
                <tr>
                    <td>Domicilio</td>
                    <td><input  name='domicilioC' value='' type='text' class='form-control'  ></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input  name='telefonoC' value='' type='text' class='form-control'  ></td>
                </tr>
                <tr>
                    <td>Obra Social</td>
                    <td><input  name='obraC' value='' type='text' class='form-control'  ></td>
                </tr>
                <tr>
                    <td>Medico</td>
                    <td><input name='medicoC' value='' type='text' class='form-control'  ></td>        
                    <th scope='row'></th>                           
                    </form>
                </tr>
            </tbody>
        </table>";
    }
    // elseif(!is_numeric($_POST['dniC'])) {
    //     echo "<div class='alert alert-danger'>Formato incorrecto </div>";
    //     if(empty($_POST['dniC'])){
    //         echo "<div class='alert alert-danger'>Ingrese DNI </div>";
    //     }



// controlador validar clientes

if (!empty($_POST['validarC'])) {
    $sql=$conexion->query(" INSERT INTO pacientes (dni_P, nombre_P, apellido_P, domicilio_P, telefono_P, obra_S, fecha_P, medico_P) VALUES ('$dni', '$nombre', '$apellido', '$domicilio', '$telefono', '$obra', '$fecha', '$medico')");
 if ($sql) {
    echo "<script>alert('Cliente agregado correctamente')</script>";
    echo "<script>window.location='clientes.php'</script>";
} else {
    echo "<script>alert('Error al agregar cliente')</script>";
    echo "<script>window.location='clientes.php'</script>";
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
