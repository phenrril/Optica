<?php require_once("conexiondb.php"); ?>
<?php require("session.php"); ?>
<?php
	if(isset($_SESSION["dni_id"]))
	{
		header("Location: admin.php");
		exit();
	}
?>
<?php
	if(isset($_POST["dni"]))
	{
		$errores = array();
		//$errores = array_merge($errores, validarCamposObligatorios(array("username", "password")));
		$max_caracteres = array("dni" => 30, "password" => 30);
		foreach($max_caracteres as $campo => $max)
		{
			if(strlen($_POST[$campo]) > $max)
			{
				$errores[] = $campo;
			}
		}

		$dni = trim($_POST["dni"]);
		$password = sha1(trim($_POST["password"]));
		
		if(empty($errores))
		{
			$consulta = "SELECT * 
										FROM usuarios 
										
										WHERE dni = '{$dni}'
										AND password = '{$password}'
										LIMIT 1";
			$resultado = mysql_query($consulta, $conexion);
			
			
			if(mysql_affected_rows() == 1)
			{
				$usuario = mysql_fetch_array($resultado);
				$_SESSION["dni_id"] = $usuario["dni"];
				//$_SESSION["nombre_id"] = $usuario["password"];
				header("Location: admin.php");
				exit();
			}
			else
			{
				$mensaje = "usuario incorrecto, intente nuevamente: " . mysql_error();
			}
		}
		else
		{
			$mensaje = "Se han encontrado " . count($errores) . " errores";
		}
	}
?>


		<table id="estructura">
			<tr>
				<td id="menu">
<<<<<<< HEAD
					<!--<a href="admin.php">Regresar al men� principal</a>-->
				</td>
				<td id="pagina">
					<h2>Administraci�n</h2>
=======
					<!--<a href="admin.php">Regresar al menú principal</a>-->
				</td>
				<td id="pagina">
					<h2>Administración</h2>
>>>>>>> 7daef9f7f0cfff033d2b1b3416634ba7e4557c26
					<?php if(isset($mensaje)) { echo "<p>" . $mensaje . "</p>"; } ?>
					<form action="login.php" method="post">
					<table>
						<tr>
							<td>Nombre de Usuario:</td>
							<td><input type="text" name="dni"></td>
						</tr>
						<tr>
<<<<<<< HEAD
							<td>Contrase�a:</td>
=======
							<td>Contraseña:</td>
>>>>>>> 7daef9f7f0cfff033d2b1b3416634ba7e4557c26
							<td><input type="password" name="password"></td>
						</tr>
					</table>
					<input type="submit" value="Ingresar">
					</form>
				</td>
			</tr>	
		</table>
<<<<<<< HEAD

=======
>>>>>>> 7daef9f7f0cfff033d2b1b3416634ba7e4557c26
