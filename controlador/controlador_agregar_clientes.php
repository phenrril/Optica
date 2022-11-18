<?php


if (!empty($_POST['agregarC'])) {
    if (!empty($_POST['dniC']) and is_numeric($_POST['dniC']))   {

        echo "<table WIDTH='100%'  id=agregar_cliente class='table table-borderless'>
            <tr>
                <td>
                <th>Nuevo Cliente </th>
            </tr>
            <tr>
                <td>id cliente</td>
                <td><input id='text' value='' name='id' type='text' class='form-control' spellcheck='false' data-ms-editor='true' disabled ></td>
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
                    <th scope='row'></th>                           
                    </form>
                </tr>
            </tbody>
        </table>";
    }
    elseif(!is_numeric($_POST['dniC'])) {
        echo "<div class='alert alert-danger'>Formato incorrecto </div>";
        if(empty($_POST['dniC'])){
            echo "<div class='alert alert-danger'>Ingrese DNI </div>";
        }
    }
} 
?>