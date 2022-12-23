<?php

require '../conexion.php';

//echo "hola";

// if (isset($_POST['buscarC'])) {

// 	if (!empty($_POST['dniC']) and is_numeric($_POST['dniC']))   {
 		$dni=$_POST['dniC'];
 		$sql=$conexion->query(" SELECT * FROM pacientes WHERE dni_P='$dni' ");
// 		if ($datos=$sql->fetch_object()) {
            $datos=$sql->fetch_object();
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

            echo '<script type="text/javascript">
            document.getElementById("agregarC").setAttribute("type", "hidden");
            var boton = document.getElementById("irCobros");
            boton.hidden = false;
            </script>'

// 		} 
//         else {
// 			echo "<div class='alert alert-danger'>Cliente no existe </div>";
// 	}
	
// }
// else {
// 		echo "<div class='alert alert-danger'>Datos Erroneos </div>";
// }
// }


?>