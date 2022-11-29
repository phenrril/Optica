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
			$cantidad=$datos->cantidad;
			$precioBruto=$datos->preciobruto_A;
			$precioNeto=$datos->preciobruto_A;

			
		echo "<div class='alert alert-success'>Producto Encontrado </div>";
		echo'
<script type="text/javascript">;

document.getElementById("agregarArtId").setAttribute("type", "hidden");
document.getElementById("identificadorArtId").setAttribute("type", "hidden");
document.getElementById("buscarArtId").setAttribute("type", "hidden");

document.getElementById("listarArtId").setAttribute("type", "hidden");




 
 

 </script>';
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
							<th>Cantidad</th>
							<th>Precio Bruto</th>
							<th>Precio Neto</th>
							
						
					
					<tr>
							
								<td>$identificador</td>
								<td>$marca</td>
								<td>$cantidad</td>
								<td>$precioBruto</td>
								<td>$precioNeto</td>
								
							
					
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


