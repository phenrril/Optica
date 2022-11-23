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


if (!empty($_POST['listar_A'])) {

        $sql=$conexion->query(" SELECT * FROM armazon");
        if ($datos=$sql->fetch_object()) {
            $prueba=$datos->id;
            $prueba1=$datos->marca_A;
            $prueba2=$datos->identificador_A;
            $prueba3=$datos->id_Genero;
            $prueba4=$datos->precio_A;
            echo $prueba;
                echo $prueba1;
                    echo $prueba3;
                        echo $prueba4;


            //$_SESSION['usuario']=$datos->user;
            //$_SESSION['id_Cargo']=$datos->id_Cargo;
            //header("location: ojito/clientes.php");
        } else {
            echo "<div class='alert alert-danger'>NO HAY DATOS EN LA BASE DE DATOS </div>";
        }
    }
 
if (!empty($_POST['agregar_articulo'])) {
	
	echo "<table WIDTH='100%'  id=agregar_cliente class='table table-borderless'>
	<tr>
		<td>
		<th>Nuevo Cliente </th>
	</tr>
	<tr>
		<td>id cliente</td>
		<td><input id='text' value='' name='id' type='text' class='form-control' spellcheck='false' data-ms-editor='true' disabled ></td>
	</tr>
	<tbody>
		<tr>
			<td>Nombre</td>
			<td><input id='text' value=''  name='nombreC' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
		</tr>
		<tr>
			<td>Apellido</td>
			<td><input id='text' value='' name='apellidoC' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
		</tr>
		<tr>
			<td>DNI</td>
			<td><input id='text' name='dniC' value='' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
		</tr>
		<tr>
			<td>Domicilio</td>
			<td><input id='text' name='domicilioC' value='' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
		</tr>
		<tr>
			<td>Telefono</td>
			<td><input id='text' name='telefonoC' value='' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
		</tr>
		<tr>
			<td>Obra Social</td>
			<td><input id='text' name='obraC' value='' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
		</tr>
		<tr>
			<td>Medico</td>
			<td><input id='text' name='medicoC' value='' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>        
			<th scope='row'></th> 
			<th scope='row'><input name='agregar_Art' type='submit' class='btn btn-primary'Value='Agregar Articulos2'></input></th>
			
			<form action=".$_SERVER['PHP_SELF']." method='post'>"

			
			.require "../conexion.php";
			include "../controlador/controlador_validar_articulos.php"; "
			

			</form>
		</tr>
	</tbody>
</table>";


}






?>
<?php
       // $sql=$conexion->query(" INSERT INTO armazon(marca_A, identificador_A, id_Genero, precio_A) VALUES ('MARLBORO','123456','1','500')");
        //if (mysqli_query($conexion, $sql)) {
     //echo "New record created successfully";
				//}

/*
<table WIDTH="80%" class="table table-borderless" id="crearcliente">
                                    <tr>
                                        <td>
                                        <th>Nuevo Articulo</th>
                                    </tr>
                                    <tr>
                                        <td>id Articulo</td>
                                        <td><input id="text" name="idArticulo" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <td>Marca</td>
                                            <td><input id="text" name="marca" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                        </tr>
                                        <tr>
                                            <td>Identificador</td>
                                            <td><input id="text" name="identificador" type="text" class="form-control" spellcheck="false" data-ms-editor="true" </td>
                                        </tr>
                                        <tr>
                                            <td>Genero</td>
                                            <td><input id="text" name="genero" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                        </tr>
                                        <tr>
                                            <td>modelo precio prueba</td>
                                            <td><input id="text" name="precio" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                        </tr>
                                        <tr>
                                            <td>Cantidad</td>
                                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                        </tr>
                                        <tr>
                                            <td>Precio bruto</td>
                                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                        </tr>
                                        <tr>
                                            <td>Recargo</td>
                                            <td><input id="text"  placeholder="ingrese recargo" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                            <tr>
                            <td>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="manual">
                                    <label for="radio_0" class="custom-control-label">Manual</label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="porcentaje">
                                    <label for="radio_1" class="custom-control-label">Porcentaje</label>
                                </div>
                            </td>
                                        </tr>
                                        <tr>
                                            <td>Precio de Venta</td>
                                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                                            <th scope="row"><button name="submit" type="submit" class="btn btn-primary">Agregar Articulo</button></th>
                                            <th scope="row"><button name="submit" type="submit" class="btn btn-primary">Ver lista</button></th>
                                        </tr>
                                    </tbody>
                                </table>*/








?>




 