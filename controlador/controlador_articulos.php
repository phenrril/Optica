<?php 
/*//session_start();*/
echo'
		<script type="text/javascript">;
		
		document.getElementById("buscarArtId").setAttribute("type", "hidden");
		
		
		
		
		
		
		 
		 
		
		 </script>';
if (!empty($_POST['buscarA'])) {
	if (!empty($_POST['identificadorA']) ) {
		$identificador=$_POST['identificadorA'];
		//$password=sha1($_POST['password']);
		//echo $password;
		$sql=$conexion->query(" SELECT * FROM armazon WHERE identificador_A='$identificador'");
		if ($datos=$sql->fetch_object()) {
			$identificador=$datos->identificador_A;
			$marca=$datos->marca_A;
			$genero=$datos->id_Genero;
			$precio=$datos->precio_A;
			
		echo "<div class='alert alert-success'>Producto Encontrado </div>";
		//echo "identificador - marca - genero - precio"."<br>";
		//echo $identificador ." ".$marca." ".$genero." $".$precio;
		/*echo"
		
		<h4>Identificador : ".$identificador."<br>
		<h4>Marca : ".$marca."<br>
		<h4>Id Genero : ".$genero."<br>
		<h4>Precio : $".$precio."<br></h4>
		
		";*/
		echo"
		<div class='row table-responsive'>
				<table class='table table-striped'>
					
							<th>Identificador</th>
							<th>Marca</th>
							<th>Id Genero</th>
							<th>Precio</th>
							
						
					
					<tr>
							
								<td>$identificador</td>
								<td>$marca</td>
								<td>$genero</td>
								<td>$precio</td>
								
							
					
					</tbody>
				</table>
			</div>
		</div>

		";
	
	

		
	
		
		
 

			//$_SESSION['usuario']=$datos->user;
			//$_SESSION['id_Cargo']=$datos->id_Cargo;
			//header("location: ojito/clientes.php");
		} else {
			echo "<div class='alert alert-danger'>Datos Erroneos</div>";
		}
		
	} else {
		echo "<div class='alert alert-danger'>Campos Vacios</div>";
	}
	
}





 ?>