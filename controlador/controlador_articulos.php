<?php 
//session_start();
if (!empty($_POST['buscarA'])) {
	if (!empty($_POST['identificadorT']) ) {
		$identificador=$_POST['identificadorT'];
		//$password=sha1($_POST['password']);
		//echo $password;
		$sql=$conexion->query(" SELECT * FROM armazon WHERE identificador_A='$identificador'");
		if ($datos=$sql->fetch_object()) {
			$identificador=$datos->identificador_A;
			$marca=$datos->marca_A;
			$genero=$datos->id_Genero;
			$precio=$datos->precio_A;
		echo "<div class='alert alert-success'>El PRODUCTO YA SE ENCUENTRA EN LA BASE DE DATOS </div>";
		//echo "identificador - marca - genero - precio"."<br>";
		//echo $identificador ." ".$marca." ".$genero." $".$precio;
		echo"
		
		<h2>Identificador : ".$identificador."<br>
		<h2>Marca : ".$marca."<br>
		<h2>Id Genero : ".$genero."<br>
		<h2>Precio : $".$precio."<br>
		
		";
			//$_SESSION['usuario']=$datos->user;
			//$_SESSION['id_Cargo']=$datos->id_Cargo;
			//header("location: ojito/clientes.php");
		} else {
			echo "<div class='alert alert-danger'>El PRODUCTO NO EXISTE!! </div>";
		}
		
	} else {
		echo "<div class='alert alert-danger'>POR FAVOR COMPLETE LOS CAMPOS!!</div>";
	}
	
}









 ?>