<?php 

    
        
require "../conexion.php";






        $sql=$conexion->query(" SELECT * FROM armazon ");
        if ($datos=$sql->fetch_object()) {
            $_SESSION['id']=$datos->id;
            //echo "el producto ya existe";
                



    

            while ($fila = mysqli_fetch_array($sql)){
            echo "<tr><td>".$fila['id']."</td><td>".$fila['marca_A']."</td><td>".$fila['identificador_A']."</td><td>".$fila['id_Genero']."</td><td>".$fila['precio_A'];
                echo "<br />";
              }}

                mysqli_close($conexion);
               
                ?>

<script type="text/javascript">

document.getElementById('identi').setAttribute('type', 'hidden'),
document.getElementById('buscar').setAttribute('type', 'hidden'),

  document.getElementById('agregarpr').setAttribute('type', 'hidden'),
  document.getElementById('enviar').setAttribute('type', 'hidden');
 
 

 </script>




 






    