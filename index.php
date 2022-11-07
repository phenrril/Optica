<?php
//require "conexiondb.php";


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <h1 class="animate__animated animate__backInLeft">OPTICA OJITO</h1>
        <?php
        require "conexion.php";
        include "controlador/controlador_login.php" ?>

        <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>

        <p>Password <input type="password" placeholder="ingrese su contraseña" name="password"></p>

        <input type="submit" name="btningresar" value="Ingresar"></input>
    </form>
</body>

</html>
<?php
?>