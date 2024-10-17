<?php global $conexion;
include_once "includes/header.php";
include "../conexion.php";
$id_user = $_SESSION['idUser'];
$permiso = "clientes";
$sql = mysqli_query($conexion, "SELECT p.*, d.* FROM permisos p INNER JOIN detalle_permisos d ON p.id = d.id_permiso WHERE d.id_usuario = $id_user AND p.nombre = '$permiso'");
$existe = mysqli_fetch_all($sql);
if (empty($existe) && $id_user != 1) {
    header("Location: permisos.php");
}
if (!empty($_POST)) {
    $alert = "";
    if (empty($_POST['nombre']) || empty($_POST['telefono']) || empty($_POST['direccion'])) {
        $alert = '<div class="alert alert-danger" role="alert">
                                    Complete los campos obligatorios
                                </div>';
    } else {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $usuario_id = $_SESSION['idUser'];
        $dni = $_POST['dni'];
        $obrasocial = $_POST['obrasocial'];
        $medico = $_POST['medico'];
        $result = 0;
        $query = mysqli_query($conexion, "SELECT * FROM cliente WHERE nombre = '$nombre'");
        $result = mysqli_fetch_array($query);
        if ($result > 0) {
            $alert = '<div class="alert alert-danger" role="alert">
                                    El cliente ya existe
                                </div>';
        } else {
            $query_insert = mysqli_query($conexion, "INSERT INTO cliente(nombre,telefono,direccion, usuario_id, dni, obrasocial, medico) values ('$nombre', '$telefono', '$direccion', '$usuario_id', '$dni', '$obrasocial', '$medico')");
            if ($query_insert) {
                $alert = '<div class="alert alert-success" role="alert">
                                    Cliente registrado
                                </div>';
            } else {
                $alert = '<div class="alert alert-danger" role="alert">
                                    Error al registrar
                            </div>';
            }
        }
    }
    mysqli_close($conexion);
}
?>
<button class="btn btn-primary mb-2" type="button" data-toggle="modal" data-target="#nuevo_cliente"><i class="fas fa-plus"></i></button>
<?php echo isset($alert) ? $alert : ''; ?>
<div class="table-responsive">
    <table class="table table-striped table-bordered" id="tbl">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nombre *</th>
                <th>Teléfono *</th>
                <th>Dirección *</th>      
                <th>DNI</th>
                <th>Obra Social</th>
                <th>Medico</th>
                <th>Estado</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../conexion.php";

            $query = mysqli_query($conexion, "SELECT * FROM cliente");
            $result = mysqli_num_rows($query);
            if ($result > 0) {
                while ($data = mysqli_fetch_assoc($query)) {
                    if ($data['estado'] == 1) {
                        $estado = '<span class="badge badge-pill badge-success">Activo</span>';
                    } else {
                        $estado = '<span class="badge badge-pill badge-danger">Inactivo</span>';
                    }
            ?>
                    <tr>
                        <td><?php echo $data['idcliente']; ?></td>
                        <td><?php echo $data['nombre']; ?></td>
                        <td><?php echo $data['telefono']; ?></td>
                        <td><?php echo $data['direccion']; ?></td>             
                        <td>
                        <?php if (empty($data['dni']) || $data['dni'] === '-'): ?>
                            <button class="btn btn-warning" onclick="agregarDNI(<?php echo $data['idcliente']; ?>)">Agregar DNI</button>
                        <?php else: ?>
                            <?php echo $data['dni']; ?>
                        <?php endif; ?>
                        </td>
                        <td><?php echo $data['obrasocial']; ?></td>
                        <td><?php echo $data['medico']; ?></td>
                        <td>
                            <?php echo isset($data['HC']) ? $data['HC'] : ''; ?>
                            <button class="btn btn-info" data-dni="<?php echo $data['dni']; ?>" onclick="abrirHistClinica(this)">Hist. Clinica</button>
                        </td>
                        <td><?php echo $estado; ?></td>
                        <td>
                            <?php if ($data['estado'] == 1) { ?>
                                <a href="editar_cliente.php?id=<?php echo $data['idcliente']; ?>" class="btn btn-success"><i class='fas fa-edit'></i></a>
                                <form action="eliminar_cliente.php?id=<?php echo $data['idcliente']; ?>" method="post" class="confirmar d-inline">
                                    <button class="btn btn-danger" type="submit"><i class='fas fa-trash-alt'></i> </button>
                                </form>
                            <?php } ?>


                            <?php if ($data['estado'] == 0) { ?>
                                <form action="reactivar_cliente.php?id=<?php echo $data['idcliente']; ?>" method="post">
                                    <button class="btn btn-success" type="submit"><i class='fas fa-edit'></i> </button>
                                </form>
                            <?php } ?>
                                

                        </td>
                    </tr>
            <?php }
            } ?>
        </tbody>

    </table>
</div>
<div id="nuevo_cliente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="my-modal-title">Nuevo Cliente</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" autocomplete="off">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" placeholder="Ingrese Nombre" name="nombre" id="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="number" placeholder="Ingrese Teléfono" name="telefono" id="telefono" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" placeholder="Ingrese Direccion" name="direccion" id="direccion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" placeholder="Ingrese Documento" name="dni" id="dni" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="obrasocial">Obra Social</label>
                        <input type="text" placeholder="Ingrese Obra Social" name="obrasocial" id="obrasocial" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="medico">Médico</label>
                        <input type="text" placeholder="Ingrese Medico" name="medico" id="medico" class="form-control">
                    </div>
                    <input type="submit" value="Guardar Cliente" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once "includes/footer.php"; ?>

<script>
function abrirHistClinica(button) {
    var dniCliente = button.getAttribute('data-dni');
    $.ajax({
        url: 'historia_clinica.php',
        type: 'GET',
        data: { dni: dniCliente },
        success: function(response) {
            $('#histClinicaModal').remove();

            var popupContent = '<div class="modal fade" id="histClinicaModal" tabindex="-1" role="dialog" aria-labelledby="histClinicaModalLabel" aria-hidden="true">' +
                               '<div class="modal-dialog modal-dialog-centered modal-lg" role="document">' +
                               '<div class="modal-content">' +
                               '<div class="modal-header">' +
                               '<h5 class="modal-title" id="histClinicaModalLabel">Historia Clínica</h5>' +
                               '<button type="button" class="close" data-dismiss="modal" aria-label="Close">' +
                               '<span aria-hidden="true">&times;</span>' +
                               '</button>' +
                               '</div>' +
                               '<div class="modal-body">' +
                               '<div class="table-responsive">' +
                               '<table class="table table-striped">' +
                               '<thead>' +
                               '<tr>' +
                               '<th>Fecha</th>' +
                               '<th>Ojo Derecho L1</th>' +
                               '<th>Ojo Derecho L2</th>' +
                               '<th>Ojo Derecho L3</th>' +
                               '<th>Ojo Derecho C1</th>' +
                               '<th>Ojo Derecho C2</th>' +
                               '<th>Ojo Derecho C3</th>' +
                               '<th>Ojo Izquierdo L1</th>' +
                               '<th>Ojo Izquierdo L2</th>' +
                               '<th>Ojo Izquierdo L3</th>' +
                               '<th>Ojo Izquierdo C1</th>' +
                               '<th>Ojo Izquierdo C2</th>' +
                               '<th>Ojo Izquierdo C3</th>' +
                               '<th>Addg</th>' +
                               '<th>Armazón</th>' +
                               '<th>Precio</th>' +
                               '<th>Observaciones</th>' +
                               '</tr>' +
                               '</thead>' +
                               '<tbody>' + response + '</tbody>' +
                               '</table>' +
                               '</div>' +
                               '</div>' +
                               '<div class="modal-footer">' +
                               '<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>' +
                               '<button type="button" class="btn btn-primary" onclick="agregarFila()">Agregar Información</button>' +
                               '<button type="button" class="btn btn-success" onclick="guardarInformacion()">Guardar</button>' +
                               '</div>' +
                               '</div>' +
                               '</div>' +
                               '</div>';
            $('body').append(popupContent);
            $('#histClinicaModal').modal('show');
        }
    });
}

function agregarFila() {
    var newRow = '<tr>' +
                 '<td><input type="date" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="date" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="number" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '</tr>';
    $('#histClinicaModal tbody').append(newRow);
}

function guardarInformacion() {
    var rows = $('#histClinicaModal tbody tr');
    var data = [];

    rows.each(function() {
        var row = $(this);
        var rowData = {
            dni_cliente: row.find('input[name="dni_cliente"]').val(),
            fecha: row.find('input[name="fecha"]').val(),
            od_l_1: row.find('input[name="od_l_1"]').val(),
            od_l_2: row.find('input[name="od_l_2"]').val(),
            od_l_3: row.find('input[name="od_l_3"]').val(),
            od_c_1: row.find('input[name="od_c_1"]').val(),
            od_c_2: row.find('input[name="od_c_2"]').val(),
            od_c_3: row.find('input[name="od_c_3"]').val(),
            oi_l_1: row.find('input[name="oi_l_1"]').val(),
            oi_l_2: row.find('input[name="oi_l_2"]').val(),
            oi_l_3: row.find('input[name="oi_l_3"]').val(),
            oi_c_1: row.find('input[name="oi_c_1"]').val(),
            oi_c_2: row.find('input[name="oi_c_2"]').val(),
            oi_c_3: row.find('input[name="oi_c_3"]').val(),
            addg: row.find('input[name="addg"]').val(),
            armazon: row.find('input[name="armazon"]').val(),
            precio: row.find('input[name="precio"]').val(),
            observaciones: row.find('input[name="observaciones"]').val()
        };
        data.push(rowData);
    });

    $.ajax({
        url: 'guardar_historia_clinica.php',
        type: 'POST',
        data: { data: JSON.stringify(data) },
        success: function(response) {
            if (response === 'success') {
                alert('Información guardada correctamente');
                $('#histClinicaModal').modal('hide');
            } else {
                alert('Error al guardar la información');
            }
        }
    });
}

function agregarFila() {
    var newRow = '<tr>' +
                 '<td><input type="date" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '<td><input type="number" class="form-control"></td>' +
                 '<td><input type="text" class="form-control"></td>' +
                 '</tr>';
    $('#histClinicaModal tbody').append(newRow);
}

function agregarDNI(idCliente) {
    var nuevoDNI = prompt("Ingrese el nuevo DNI:");
    if (nuevoDNI) {
        $.ajax({
            url: 'agregar_dni.php',
            type: 'POST',
            data: { id: idCliente, dni: nuevoDNI },
            success: function(response) {
                if (response === 'success') {
                    location.reload();
                } else {
                    alert("Error al agregar DNI");
                }
            }
        });
    }
}
</script>