<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];



$conexion=mysqli_connect("localhost","root","","ojitosdesol");

$consulta="SELECT*FROM usuarios where user='$usuario' and pass='$contraseña'";
$consulta2="SELECT id_Cargo FROM usuarios where user='$usuario' and pass='$contraseña'";
$ses=mysqli_query($conexion,$consulta2);
$resultado=mysqli_query($conexion,$consulta);
$fila= mysqli_fetch_array ($ses);
//echo $fila['0'];
$filas=mysqli_num_rows($resultado);










session_start();
$_SESSION['usuario']=$usuario;
$_SESSION['id_Cargo']=$fila['0'];

//$_SESSION['wallet']==$fila['4'];
//echo $_SESSION['id_cargo'];
if($_SESSION['id_Cargo']!=0){
header("location:ojitos/clientes.php");}
	//if($_SESSION['id_Cargo']==2){
   //header("location:ojitos/clientes.php");

else{
    ?>
    <?php
    include("index.php");
     //header("location:index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);



?>





