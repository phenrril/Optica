<?php 
require '../conexion.php';
	
//$identificador_art = $_POST['identificadorprueba'];
$marca_art = $_POST['marca_art'];
$identificador_art = $_POST['identificador_art'];
$precioB_art= $_POST['precioB_A'];
$precioN_art= $_POST['precioN_A'];
$cantidad_A= $_POST['cantidad_art'];

/*echo $identificador_art;
echo $marca_art;
echo $cantidad_A;
echo $precioN_art;
echo $precioB_art;
//echo $idg_art;
//echo $precio_art;*/
//$sql = "INSERT INTO armazon (marca_A , identificador_A , cantidad , precioneto_A , preciobruto_A) VALUES ('$marca_art', '$identificador_art', '$cantidad_A', '$$precioN_art', '$precioB_art')";
	//$resultado = $mysqli->query($sql);


  $sql=$conexion->query("INSERT INTO armazon (marca_A , identificador_A , cantidad , precioneto_A , preciobruto_A) VALUES ('$marca_art', '$identificador_art', '$cantidad_A', '$$precioN_art', '$precioB_art')");
  if ($sql) {    
     //$sql=$conexion->query(" SELECT * FROM pacientes WHERE dni_P='$dni' ");
     
 
 
    
     echo "<div class='alert alert-success'>Articulo Agregado Correctamente</div>";
     //echo "<script>window.location='cobros.php'</script>";
 
 } else {
     echo "<script>alert('Error al agregar cliente')</>";
 }

 ?>







    