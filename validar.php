<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","opticaojitodesol");

$consulta="SELECT*FROM usuarios where user='$usuario' and pass='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:clientes.php");

}else{
    ?>
    <?php
    include("login.php");

    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
    header("location:login.php");
    echo "<h1 class='bad'>ERROR EN LA AUTENTIFICACION</h1>";
}
17
mysqli_free_result($resultado);
mysqli_close($conexion);