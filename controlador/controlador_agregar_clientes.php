<?php
//session_start();


if (!empty($_POST['agregarC'])) {
    if (!empty($_POST['dniC'])) {
        echo "<table WIDTH='80%'  id=agregar_cliente class='table table-borderless'>
            <tr>
                <td>
                <th>Nuevo Cliente </th>
            </tr>
            <tr>
                <td>id cliente</td>
                <td><input id='text' value=''  name='id' type='text' class='form-control' spellcheck='false' data-ms-editor='true' ></td>
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
                    <th scope='row'><input name='guardar' value='Guardar e ir a Cobros' type='submit' class='btn btn-primary'></input></th>
                </tr>
            </tbody>
        </table>";
    }
    else{
        echo "<div class='alert alert-danger'>Ingrese Dni </div>";
    }
    if (!empty($_POST['guardar'])) {
        if (!empty($_POST['dniC']) or !empty($_POST['nombreC']) or !empty($_POST['apellidoC']) or !empty($_POST['domicilioC']) or !empty($_POST['telefonoC']) or !empty($_POST['obraC']) or !empty($_POST['fechaC']) or !empty($_POST['medicoC'])) {
            $dni = $_POST['dniC'];
            $nombre = $_POST['nombreC'];
            $apellido = $_POST['apellidoC'];
            $domicilio = $_POST['domicilioC'];
            $telefono = $_POST['telefonoC'];
            $obra = $_POST['obraC'];
            $fecha = $_POST['fechaC'];
            $medico = $_POST['medicoC'];
            $sql = $conexion->query(" INSERT INTO pacientes (dni_P, nombre_P, apellido_P, domicilio_P, telefono_P, obra_S, fecha_P, medico_P) VALUES ('$dni', '$nombre', '$apellido', '$domicilio', '$telefono', '$obra', '$fecha', '$medico')");
            if ($sql) {
                echo "<script>alert('Cliente agregado correctamente')</script>";
                echo "<script>window.location='clientes.php'</script>";
            } else {
                echo "<script>alert('Error al agregar cliente')</script>";
                echo "<script>window.location='clientes.php'</script>";
            }
        } else {
            echo "<div class='alert alert-danger'>campos vacios </div>";
        }
    }
}
