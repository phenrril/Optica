<?php 
//session_start();
if (!empty($_POST['buscarA'])) {
	if (!empty($_POST['identificadorT']) ) {
		$identificador=$_POST['identificadorT'];
		//$password=sha1($_POST['password']);
		//echo $password;
		$sql=$conexion->query(" SELECT * FROM armazon WHERE identificador_A='$identificador'");
		if ($datos=$sql->fetch_object()) {
			$_SESSION['id']=$datos->id;
			echo "el producto ya existe";
			//$_SESSION['usuario']=$datos->user;
			//$_SESSION['id_Cargo']=$datos->id_Cargo;
			//header("location: ojito/clientes.php");
		} else {
			echo "<div class='alert alert-danger'>producto no existe </div>";
		}
		
	} else {
		echo "<div class='alert alert-danger'>campos vacios </div>";
	}
	
}





 ?>