<?php
require '../conexion.php';
echo "al ajax llega1";
if (isset($_POST['buscarC'])) {
    echo 'llega dentro del if';}
// ------- Boton Agregar Cliente ------------

if (isset($_POST['agregarCliente'])) {
   
if (!empty($_POST['dniC']) and is_numeric($_POST['dniC']))   {
    $dni=$_POST['dniC'];
    $sql=$conexion->query(" SELECT dni_P FROM pacientes WHERE dni_P='$dni' ");
    if ($datos=$sql->fetch_object()) {
        echo "<div class='alert alert-danger'>Cliente ya existe </div>";
    } 
    else {
        echo "DNI <input name='dniCliente' style='width: 200px' value='' type='text' class='form-control' autofocus >";
        echo "Nombre <input name='nombreC' style='width: 200px' value='' type='text' class='form-control'  >";
        echo "Apellido <input name='apellidoC' style='width: 200px' value='' type='text' class='form-control'  >";
        echo "Domicilio <input name='domicilioC' style='width: 200px' value='' type='text' class='form-control'  >";
        echo "Telefono <input name='telefonoC' style='width: 200px' value='' type='text' class='form-control'  >";
        echo "Obra Social <input name='obraC' style='width: 200px' value='' type='text' class='form-control'  >";
        echo "Medico <input name='medicoC' style='width: 200px' value='' type='text' class='form-control'  >";
        echo "<input name='fechaC' style='visibility:hidden' style='width: 200px' value='' type='text' class='form-control' disabled  >";
    }
}
else {
    echo "<div class='alert alert-danger'>Datos Erroneos </div>";
} 
}

// - ------ Boton Buscar Cliente ------------







?>