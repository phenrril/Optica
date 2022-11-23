<?php
/*$sql=$conexion->query(" INSERT INTO armazon (marca_A, identificador_A, id_Genero, precio_A) VALUES ('MARLBORO','123456','1','500')");
if (mysqli_query($conexion, $sql)) {
echo "New record created successfully";




}*/

if (!empty($_POST['agregar_Art'])) {
	
	$sql=$conexion->query(" INSERT INTO armazon (marca_A, identificador_A, id_Genero, precio_A) VALUES ('GUILLE','456','1','600')");
if (mysqli_query($conexion, $sql)) {
echo "New record created successfully";

}else{
    echo"te quiero mucho";
} 


}
?>