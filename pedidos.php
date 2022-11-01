<!DOCTYPE html>
<html lang="en">

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
                <div class="sidebar-brand-text mx-3">Berazateguis<sup>tm</sup></div>
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
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="ventas.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Ventas</span></a>
            </li>

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
            <li class="nav-item active">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nombre User</span>
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


                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Cliente</th>
                            <td></td>
                            <td></td>
                            <th>Id cristal</th>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                        </tr>
                        <tr>
                            <td>id cliente</td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true" disabled></td>
                            <td>Cod Producto</td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td>Nombre producto</td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nombre</td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true" disabled></td>
                            <td>Cristales</td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td>Precio Cristales</td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>

                        </tr>
                        <tr>
                            <td>Apellido</td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true" disabled></td>
                            <td>Observaciones</td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td>Tipo Lentes</td>
                            <td>
                                <div class="col-6">
                                    <select id="select" name="select" class="custom-select">
                                        <option value="rabbit">Bifocales</option>
                                        <option value="duck">Multifocales</option>
                                        <option value="fish">Lentes de Sol</option>
                                        <option value="rabbit">LDS - Bifocales</option>
                                        <option value="duck">Fantasia</option>
                                        <option value="fish">Otro</option>
                                    </select>
                            </td>
                        </tr>
                        <tr>
                            </td>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th scope="row"><button name="submit" type="submit" class="btn btn-primary">Agregar</button></th>

                        </tr>
                    </tbody>
                </table>

                <!-- Tabla Ojo D Ojo I graduaciones  -->
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Graduacion Lejos</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th>Articulos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ojo D</td>
                            <td></td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td></td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td></td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td></td>
                            <td></td>
                            <td>Producto Sel</td>
                            <td style="width:250px;"><button name="submit" type="submit" class="btn btn-primary">Cancelar</button></td>
                            <td style="width:100px;">Precio</td>
                            <td style="width:100px;"><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                        </tr>
                        <tr>
                            <td>Ojo I</td>
                            <td></td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td></td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td></td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td></td>
                            <td></td>
                            <td>Producto Sel</td>
                            <td style="width:250px;"><button name="submit" type="submit" class="btn btn-primary">Cancelar</button></td>
                            <td style="width:100px;">Precio</td>
                            <td style="width:100px;"><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                        </tr>
                        <tr>
                            <th>Graduacion Cerca</th>
                            <td>ADD:
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Producto Sel</td>
                            <td style="width:250px;"><button name="submit" type="submit" class="btn btn-primary">Cancelar</button></td>
                            <td style="width:100px;">Precio</td>
                            <td style="width:100px;"><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                        </tr>
                        <tr>
                            <td>Ojo D</td>
                            <td></td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td></td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td></td>
                            <td><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td></td>
                            <td></td>
                            <td>Producto Sel</td>
                            <td style="width:250px;"><button name="submit" type="submit" class="btn btn-primary">Cancelar</button></td>
                            <td style="width:100px;">Precio</td>
                            <td style="width:100px;"><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                        </tr>
                        <tr>
                            <td style="width:60px;">Ojo I </td>
                            <td style="width:60px;"></td>
                            <td style="width:100px;"><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td style="width:60px;"></td>
                            <td style="width:100px;"><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td style="width:60px;"></td>
                            <td style="width:100px;"><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <td></td>
                            <td></td>
                            <td>Producto Sel 2</td>
                            <td style="width:250px;"><button name="submit" type="submit" class="btn btn-primary">Cancelar</button></td>
                            <td style="width:100px;">Precio</td>
                            <td style="width:100px;"><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th>Descuento en %</th>
                            <td style="width:100px;"><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th>Total</th>
                            <td style="width:100px;"><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>
                            <th>Resta</th>
                            <td style="width:250px;"><input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true"></td>


                        </tr>
                        <tr>
                            <th scope="row"> </th>
                        </tr>
                        <tr>
                            <th scope="row">Metodo de pago</th>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="Efectivo">
                                    <label for="radio_0" class="custom-control-label">Efectivo</label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Debito">
                                    <label for="radio_1" class="custom-control-label">Debito</label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Credito">
                                    <label for="radio_2" class="custom-control-label">Credito</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><button name="submit" type="submit" class="btn btn-primary">Enviar</button></td>
                            <td><button name="submit" type="submit" class="btn btn-primary">Cancel</button></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Pedido<input id="text" name="text" type="text" class="form-control" spellcheck="false" data-ms-editor="true" disabled></td>
                        </tr>
                    </tbody>
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
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="login.html">Logout</a>
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