<!DOCTYPE html>
<?php 
session_start();
if (!empty($_SESSION['id'])) {
  //echo "positivo";
} else {
    header("location: ../index.php");
}

 ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>titulo pestaña</title>

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

            <li class="nav-item active">
                <a class="nav-link" href="articulos.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Articulos</span></a>
            </li>


            <!-- Divider -->
            <?php if ($_SESSION['id_Cargo'] == 1) {
                echo "<hr class='sidebar-divider'><li class='nav-item'><a class='nav-link' href='ventas.php'><i class='fas fa-fw fa-cog'></i><span>Ventas</span></a></li>";
            }
            ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="cobros.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Cobros</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item ">
                <a class="nav-link" href="pedidos.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pedidos</span></a>
            </li>


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
       
                <div class="container-fluid">
                  
                    <table WIDTH="90%" align="center" >
                        <tr>
                            <td>
                            <table WIDTH="80%" class="table table-borderless" id="buscarcliente">
                                    <tr>
                                        <th>Busqueda de Articulos</th>
                                    </tr>
                                    <tr>
                                        <td>Identificador</td>
                                                 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <?php  require "../conexion.php";
                                         include "../controlador/controlador_articulos.php"; ?>
                                        <td><input   name="identificadorT" type="text"  ></td>
                                    </tr>
                                            <th scope="row"><input name="buscarA" type="submit" value="Buscar" class="btn btn-primary"></input></th>
                                            <th scope="row"><button name="submit" type="submit" class="btn btn-primary">Agregar Articulo</button></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td></form>
                                
                                <table WIDTH="80%" class="table table-borderless" id="crearcliente">
                                    <tr>
                                        <td>
                                        <th>Nuevo Articulo</th>
                                    </tr>
                                    <tr>
                                        <td>id Articulo</td>
                                        <td><input id="text" name="idArticulo" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <td>Marca</td>
                                            <td><input id="text" name="marca" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                        </tr>
                                        <tr>
                                            <td>Identificador</td>
                                            <td><input id="text" name="identificador" type="text" class="form-control" spellcheck="false" data-ms-editor="true" </td>
                                        </tr>
                                        <tr>
                                            <td>Genero</td>
                                            <td><input id="text" name="genero" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                        </tr>
                                        <tr>
                                            <td>modelo precio prueba</td>
                                            <td><input id="text" name="precio" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                        </tr>
                                        <tr>
                                            <td>Cantidad</td>
                                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                        </tr>
                                        <tr>
                                            <td>Precio bruto</td>
                                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                        </tr>
                                        <tr>
                                            <td>Recargo</td>
                                            <td><input id="text"  placeholder="ingrese recargo" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true" ></td>
                                            <tr>
                            <td>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="manual">
                                    <label for="radio_0" class="custom-control-label">Manual</label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="porcentaje">
                                    <label for="radio_1" class="custom-control-label">Porcentaje</label>
                                </div>
                            </td>
                                        </tr>
                                        <tr>
                                            <td>Precio de Venta</td>
                                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                                            <th scope="row"><button name="submit" type="submit" class="btn btn-primary">Agregar Articulo</button></th>
                                            <th scope="row"><button name="submit" type="submit" class="btn btn-primary">Ver lista</button></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>







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

</body>

</html>