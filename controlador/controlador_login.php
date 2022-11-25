<?php 
session_start();
if (!empty($_POST['btningresar'])) {
	if (!empty($_POST['usuario']) and !empty($_POST['password'])) {
		$usuario=$_POST['usuario'];
		$password=sha1($_POST['password']);
		//echo $password;
		$sql=$conexion->query(" SELECT * FROM usuarios WHERE user='$usuario' AND pass='$password'");
		if ($datos=$sql->fetch_object()) {
			$_SESSION['id']=$datos->id;
			$_SESSION['usuario']=$datos->user;
			$_SESSION['id_Cargo']=$datos->id_Cargo;
			header("location: ojito/clientes.php");
		} else {
			echo "<div class='alert alert-danger'>ACCESO DENEGADO </div>";
		}
		
	} else {
		echo "CAMPOS VACIOS";
	}
	
}





 ?>