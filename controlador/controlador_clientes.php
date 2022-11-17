<?php 
//session_start();
if (!empty($_POST['buscarC'])) {
	if (!empty($_POST['dniC']) ) {
		$dni=$_POST['dniC'];
		//$password=sha1($_POST['password']);
		//echo $password;
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

            echo "<table WIDTH='80%' class='table table-borderless' id='crearcliente'>
            <tr>
                <td>
                <th>Nuevo Cliente </th>
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



			//$_SESSION['usuario']=$datos->user;
			//$_SESSION['id_Cargo']=$datos->id_Cargo;
			//header('location: ojito/clientes.php');
		} else {
			echo "<div class='alert alert-danger'>Cliente no existe </div>";
		}
		
	} else {
		echo "<div class='alert alert-danger'>campos vacios </div>";
	}
	
}
