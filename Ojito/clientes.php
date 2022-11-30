<!DOCTYPE html>
<?php

//use Google\Service\CloudSearch\Id;
//use Google\Service\CloudSearch\Value;
// sebva sos un berazategui


session_start();
if (!empty($_SESSION['id'])) {
    //echo "positivo";
} else {
    header("location: ../index.php");
}

?>
<html lang="es">

<head>
    <!-- <script src="/script.js"></script> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


    <title>Ojito de Sol</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>  

<body id="page-top">

<script src="/script.js"></script>    

    <?php /* session_start(); 

 if (isset($_SESSION['name'])){
     $_SESSION['name']; 
 }
 else {
      header("location:logout.php");  
 }   
    */ ?>
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
            <li class="nav-item active">
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
            <li class="nav-item">
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
                                <img class="img-profile rounded-circle" src="css/circulo.png">
                            </a>
                            <!-- user info -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="controlador/cerrar_sesion.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <table WIDTH="50%" align="center" id="buscarcliente">
                        <tr>
                            <td>
                                <table WIDTH="50%" class="table table-borderless">
                                    <tr>
                                        <th></th>
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="formularioArt">
                                            <?php require "../conexion.php";
                                            include "../controlador/controlador_clientes.php"; //buscar clientes
                                           // include "../controlador/controlador_agregar_clientes.php"; // agregar clientes
                                           // include "../controlador/controlador_validar_clientes.php"; // validar clientes ?> 
                                    </tr id="resultado2">
                                    <tr>
                                        <td>DNI</td>
                                        <td><input id="text" placeholder="coloque DNI" name="dniC" id="dniId"type="text" class="form-control" spellcheck="false" data-ms-editor="true" autofocus></td>
                                    </tr>
                                    <th scope="row" width="25%"><input value="Buscar Cliente" name="buscarC" type="submit" class="btn btn-primary"></input></th>
                                    <th scope="row" width="25%"><input value="Agregar Cliente" name="agregarC" type="submit" class="btn btn-primary"></input></th>
                                    <th scope="row" width="25%"><input value="Guardar y cobrar" name="validarC" type="submit" class="btn btn-primary"onClick="location.href='cobros.php'"></input></th>
                                    <th scope="row" width="25%"><input value="Cancelar" name="cancelarC" type="submit" class="btn btn-primary" onClick="location.href='clientes.php'"></input></th>
                                    </form>
                        </tr>
                        </tbody>
                    </table>
                    </td>
                    </td>
                    </tr>
                    <tr>
                        </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; S&M Informatica 2022</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
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

    <script >   
    $("#buscarCliente").click(function(){   
            $.ajax({
                    url: "resultado.php",
                    type: "post",
                    data: $("#formularioArt").serialize(),
                    success: function(resultado){
                            $("#resultado2").html(resultado);
                    }
            });
    });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

</body>

</html>