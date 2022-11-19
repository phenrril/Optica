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
		echo "<div class='alert alert-danger'>El PRODUCTO YA SE ENCUENTRA EN LA BASE DE DATOS </div>";
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
if (!empty($_POST['listarA'])) {
	
		







		$sql=$conexion->query(" SELECT * FROM armazon ");
		if ($datos=$sql->fetch_object()) {
			$_SESSION['id']=$datos->id;
			//echo "el producto ya existe";
				



	

			while ($fila = mysqli_fetch_array($sql)){
			echo "<tr><td>".$fila['id']."</td><td>".$fila['marca_A']."</td><td>".$fila['identificador_A']."</td><td>".$fila['id_Genero']."</td><td>".$fila['precio_A'];
				echo "<br />";
				}

				mysqli_close($conexion);?>

<script type="text/javascript">

	

function cambiarTipo(){
  document.getElementById('agregarpr').setAttribute('type', 'hidden');

} 





 </script>



<?php 



		} else {
			echo "<div class='alert alert-danger'>producto no existe </div>";
		}
		
	} 
	

if (!empty($_POST['agregar_a'])) {
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