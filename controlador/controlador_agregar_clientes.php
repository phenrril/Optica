<?php 
//session_start();
if (!empty($_POST['buscarC'])) {
	if (!empty($_POST['dniC']) ) {
		$dni=$_POST['dniC'];
		//$password=sha1($_POST['password']);
		//echo $password;
		$sql=$conexion->query(" SELECT * FROM pacientes WHERE dni_P='$dni'");
		if ($datos=$sql->fetch_object()) {
		

            echo "<table WIDTH='80%' class='table table-borderless' id='crearcliente'>
            <tr>
                <td>
                <th>Nuevo Cliente </th>
            </tr>
            <tr>
                <td>id cliente</td>
                <td><input id='text' value=''  name='text' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
            </tr>
            <tbody>
                <tr>
                    <td>Nombre</td>
                    <td><input id='text' value=''  name='text' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input id='text' value='' name='text' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
                </tr>
                <tr>
                    <td>DNI</td>
                    <td><input id='text' name='text' value='' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
                </tr>
                <tr>
                    <td>Domicilio</td>
                    <td><input id='text' name='text' value='' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td><input id='text' name='text' value='' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
                </tr>
                <tr>
                    <td>Obra Social</td>
                    <td><input id='text' name='text' value='' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
                </tr>
                <tr>
                    <td>Medico</td>
                    <td><input id='text' name='text' value='' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
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
