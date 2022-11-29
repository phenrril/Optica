<?php 



//echo "DNI <input name='dniCliente' style='width: 200px' value='' type='text' class='form-control' autofocus >";
/*echo "Nombre <input name='nombreC' style='width: 200px' value='' type='text' class='form-control'  >";
echo "Apellido <input name='apellidoC' style='width: 200px' value='' type='text' class='form-control'  >";
echo "Domicilio <input name='domicilioC' style='width: 200px' value='' type='text' class='form-control'  >";
echo "Telefono <input name='telefonoC' style='width: 200px' value='' type='text' class='form-control'  >";
echo "Obra Social <input name='obraC' style='width: 200px' value='' type='text' class='form-control'  >";
echo "Medico <input name='medicoC' style='width: 200px' value='' type='text' class='form-control'  >";
echo "<input name='fechaC' style='visibility:hidden' style='width: 200px' value='' type='text' class='form-control' disabled  >";
echo "<input name='agregar' style='visibility:hidden' style='width: 200px' type='button' value='guardar' class='form-control' disabled  >";

*/echo "<br>";
echo'
<script type="text/javascript">;

document.getElementById("agregarArtId").setAttribute("type", "hidden");
document.getElementById("identificadorArtId").setAttribute("type", "hidden");
document.getElementById("listarArtId").setAttribute("type", "hidden");
document.getElementById("buscarArtId").setAttribute("type", "hidden");
document.getElementById("agregarArtId2").setAttribute("type", "button");
document.getElementById("identificadorArtIdpr1").setAttribute("type", "text");
document.getElementById("identificadorArtIdpr2").setAttribute("type", "text");
document.getElementById("identificadorArtIdpr3").setAttribute("type", "text");
document.getElementById("identificadorArtIdpr4").setAttribute("type", "text");
document.getElementById("identificadorArtIdpr5").setAttribute("type", "text");





 
 

 </script>';
    /*
        
require "../conexion.php";





$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$estado_civil = $_POST['estado_civil'];
$hijos = isset($_POST['hijo']) ? $_POST['hijos'] : 0;
$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;

$arrayIntereses = null;

$num_array = count($intereses);
$contador = 0;

if($num_array>0){
  foreach ($intereses as $key => $value) {
    if ($contador != $num_array-1)
    $arrayIntereses .= $value.' ';
    else
    $arrayIntereses .= $value;
    $contador++;
  }
}

$sql = "INSERT INTO personas (nombre, correo, telefono, estado_civil, hijos, intereses) VALUES ('$nombre', '$email', '$telefono', '$estado_civil', '$hijos', '$arrayIntereses')";
$resultado = $mysqli->query($sql);

?>
               
echo'
<script type="text/javascript">;

document.getElementById("agregarArtId").setAttribute("type", "hidden");
document.getElementById("identificadorArtId").setAttribute("type", "hidden");
document.getElementById("buscarArtId").setAttribute("type", "hidden");

document.getElementById("listarArtId").setAttribute("type", "hidden");




 
 

 </script>'
 

*/
 ?>







    