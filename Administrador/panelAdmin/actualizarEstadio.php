<?php
//incluye la clase noticia y CrudNoticia
	require_once('crud_estadio.php');
	require_once('estadio.php');
	$crud= new CrudEstadio();
	$estadio=new Estadio();
	//busca la noticia utilizando el id, que es enviado por GET desde la vista mostrar.php

  $codigoEstadio = $_GET['cod_estadio'];
	$estadio=$crud->obtenerEstadio($codigoEstadio);

	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <title>Administrator</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="plantillaAdmin.php">Soccer League</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="../../plantilla.php" data-target="#logoutModal">Cerrar Sesion</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="plantillaAdmin.php">
          <i class="fa fa-home"></i>
          <span>Inicio</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="plantillaEquipos.php">
          <i class="fa fa-users"></i>
          <span>Equipos</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="plantillaJuez.php">
          <i class="fa fa-eye"></i>
          <span>Arbitros</span>
        </a>
      </li>
			<li class="nav-item active">
        <a class="nav-link" href="plantillaEstadio.php">
          <i class="fa fa-map-pin"></i>
          <span>Estadios</span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="w3-container w3-black">
        <center><h2>Modificar Estadio</h2></center>
      </div>

<form action='acciones_estadio.php' method='post'>
  <br><br>

   <tr>
      <td><input type="hidden" name="cod_estadio" value='<?php echo $estadio->getCodigoEstadio()?>'></td>
    </tr>
<p>
<label>Nombre Estadio:</label>
<input value="<?php echo $estadio->getNombreEstadio()?>" name="nom_estadio" class="w3-input" type="text"></p>
<p>
<label>Ubicación:</label>
<input value="<?php echo $estadio->getLugarEstadio()?>" name="lugar_estadio" class="w3-input" type="text"></p>
<p>
<label>Año Fundado:</label>
<input value="<?php echo $estadio->getAnoEstadio()?>" name="anofunda_estadio" class="w3-input" type="text"></p>
<p>
<label>Capacidad Estadio:</label>
<input value="<?php echo $estadio->getCapacidadEstadio()?>" name="capa_estadio" class="w3-input" type="text"></p>


<center><button id="actualizarEstadio" class="w3-btn w3-white w3-border w3-border-black w3-round-large" type="submit" name="actualizarEstadio">Actualizar</button></center>

</form>



          <footer class="sticky-footer">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2019</span>
              </div>
            </div>
          </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

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
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../../vendor/chart.js/Chart.min.js"></script>
    <script src="../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../../js/demo/datatables-demo.js"></script>
    <script src="../../js/demo/chart-area-demo.js"></script>

  </body>

  </html>
