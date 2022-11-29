<?php 

    
        
require "../conexion.php";






        $sql=$conexion->query(" SELECT * FROM armazon ");
        if ($datos=$sql->fetch_object()) {
           // $_SESSION['id']=$datos->id;
            //echo "el producto ya existe";
                

            
            //echo mysqli_fetch_array($sql)[1];

            while ($fila = mysqli_fetch_array($sql)){
            echo "<tr><td>".$fila['id']."</td><td>".$fila['marca_A']."</td><td>".$fila['identificador_A']."</td><td>".$fila['cantidad']."</td><td>".$fila['precioneto_A']."</td><td>".$fila['preciobruto_A'];
                echo "<br />";
              }

                mysqli_close($conexion);
            }
               
echo'
<script type="text/javascript">;

document.getElementById("agregarArtId").setAttribute("type", "hidden");
document.getElementById("identificadorArtId").setAttribute("type", "hidden");
document.getElementById("buscarArtId").setAttribute("type", "hidden");

document.getElementById("listarArtId").setAttribute("type", "hidden");




 
 

 </script>'
 


 ?>







    