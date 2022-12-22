<!DOCTYPE html>
<html lang="en">
<?php



session_start();
if (!empty($_SESSION['id'])) {
    //echo "positivo";
} else {
    header("location: ../index.php");
}

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ojito de Sol</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="clientes.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Ojito de Sol<sup>tm</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="Clientes.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span></span>Clientes</a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading 
             <div class="sidebar-heading">
                Interface
             </div> -->

            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">
                <a class="nav-link" href="articulos.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Articulos</span></a>
            </li>


            <!-- Divider -->
            <?php if ($_SESSION['id_Cargo'] == 1) {
                echo "<hr class='sidebar-divider'><li class='nav-item'><a class='nav-link' href='ventas.php'><i class='fas fa-fw fa-cog'></i><span>Ventas</span></a></li>";
            }
            ?>

            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="cobros.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Cobros</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="pedidos.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pedidos</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>


                            <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['usuario']; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- user info -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                <!-- aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <!-- Tabla Ojo cliente  -->
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <td><b>Id Cliente: </b><?php echo $_SESSION['idcliente']; ?></td>
                        </tr>
                        <tr>
                            <td><b>Apellido y nombre: </b><?php echo $_SESSION['nombre_P'] . "&nbsp" . $_SESSION['apellido_P']; ?></td>
                        </tr>
                        <tr>
                            <td><b>D.N.I : </b><?php echo $_SESSION['dni_P']; ?></td>
                        </tr>
                    </thead>
                </table>
                <table class="table table-borderless" id="tablaMayor">
                    <td>
                        <table class="table table-borderless" id="tablaGracuadiones">
                            <form id="graduaciones">
                                <div id="okGrad"></div>
                                <tr>
                                    <td><b>Graduacion Cerca </b></td>
                                </tr>
                                <tr>
                                    <td><b>Ojo D:</b><input name="ojoD1" id="ojoD1" type="text" size="4">&nbsp&nbsp&nbsp<input name="ojoD2" type="text" size="4">&nbsp&nbsp&nbsp<input name="ojoD3" type="text" size="4"></td>
                                </tr>
                                <tr>
                                    <td><b>Ojo I: &nbsp</b><input name="ojoI1" type="text" size="4">&nbsp&nbsp&nbsp<input name="ojoI2" type="text" size="4">&nbsp&nbsp&nbsp<input name="ojoI3" type="text" size="4"></td>
                                </tr>
                                <tr>
                                    <td><b>Graduacion Lejos </b></td>
                                </tr>
                                <tr>
                                    <td><b>Ojo D:</b><input name="ojoDl1" type="text" size="4">&nbsp&nbsp&nbsp<input name="ojoDl2" type="text" size="4">&nbsp&nbsp&nbsp<input name="ojoDl3" type="text" size="4"></td>
                                </tr>
                                <tr>
                                    <td><b>Ojo I: &nbsp</b><input name="ojoIl1" type="text" size="4">&nbsp&nbsp&nbsp<input name="ojoIl2" type="text" size="4">&nbsp&nbsp&nbsp<input name="ojoIl3" type="text" size="4"></td>
                                </tr>
                                <tr>
                                    <td><b>ADD: &nbsp</b><input name="add" type="text" size="4"></td>
                                </tr>
                            </form>
                        </table>
                    </td>
                    <td>
                        <table class="table table-borderless" id="tablaProductos">
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td><b>Identificador:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input name="identificador1" id="identificador1" type="text" size="6">&nbsp&nbsp<input type="button" value="Buscar"></td>
                            </tr>
                            <tr>
                                <td><b>Nomb Producto: &nbsp</b><input type="text" size="6"></td>
                            </tr>
                            <tr>
                                <td><b>Cristales:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" size="6"></td>
                            </tr>
                            <tr>
                                <td><b>Precio Cristales: &nbsp</b><input type="text" size="6"></td>
                            </tr>
                            <tr>
                                <td><b>Observaciones: &nbsp&nbsp&nbsp</b><input type="text" size="6"></td>
                            </tr>
                            <tr>
                                <td><input type="button" value="Agregar" id="agregarGraduaciones"></td>
                            </tr>
                        </table>
                    </td>
                    <td> </td>
                    <td> </td>
                </table>
                <table cellpadding="12" id="tablaProdSeleccion" style="margin: 0 auto; border:0;">
                    <tr>
                        <td hidden><b> Producto: &nbsp</b><input type="text" size="25" disabled><input type="button" value="Quitar"></td>
                    </tr>
                    <tr>
                        <td hidden><b> Producto: &nbsp</b><input type="text" size="25" disabled><input type="button" value="Quitar"></td>
                    </tr>
                    <tr>
                        <td hidden><b> Producto: &nbsp</b><input type="text" size="25" disabled><input type="button" value="Quitar"></td>
                    </tr>
                    <tr>
                        <td hidden><b> Producto: &nbsp</b><input type="text" size="25" disabled> <input type="button" value="Quitar"></td>
                    </tr>
                    <tr>
                        <td hidden><b> Producto: &nbsp</b><input type="text" size="25" disabled><input type="button" value="Quitar"></td>
                    </tr>
                </table>
                <table cellpadding="12" id="tablaTotales" style="margin: 0 auto; border:0;">
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b> Descuento: &nbsp</b><input type="text" size="6" disabled></td>
                    </tr>
                    <tr>
                        <td><b> Total: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" size="6"></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b> Abona: &nbsp</b><input type="text" size="6"><b> Resta: &nbsp</b><input type="text" size="6"></td>
                    </tr>
                </table>



                <!-- End Page Content -->
                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>



                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Seleccione "Logout" para cerrar su sesion actual.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="../controlador/cerrar_sesion.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="js/demo/chart-area-demo.js"></script>
                <script src="js/demo/chart-pie-demo.js"></script>

                <script>
                    $("#agregarGraduaciones").click(function() { //# hace enfasis al id del boton

                        $.ajax({
                            url: "graduaciones.php",
                            type: "post",
                            data: $("#graduaciones").serialize(),
                            success: function(resultado) {
                                $("#okGrad").html(resultado);
                            }
                        });
                    });

                    $("#identificador1").click(function() { //# hace enfasis al id del boton

                        $.ajax({
                            url: "graduaciones.php",
                            type: "post",
                            data: $("#graduaciones").serialize(),
                            success: function(resultado) {
                                $("#okGrad").html(resultado);
                            }
                        });
                    });
                </script>


</body>

</html>