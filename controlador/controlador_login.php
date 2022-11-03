<?php 

if (!empty($_POST['btningresar'])) {
	if (!empty($_POST['usuario']) and !empty($_POST['password'])) {
		$usuario=$_POST['usuario'];
		$password=sha1($_POST['password']);
		//echo $password;
		$sql=$conexion->query(" SELECT * FROM usuarios WHERE user='$usuario' AND pass='$password'");
		if ($datos=$sql->fetch_object()) {
			//echo "hasta aca bien";
			header("location: articulos.php");
		} else {
			echo "<div class='alert alert-danger'>ACCESO DENEGADO </div>";
		}
		
	} else {
		echo "CAMPOS VACIOS";
	}
	
}





 ?>