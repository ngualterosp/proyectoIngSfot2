<?php

  require_once('crud_equipo.php');
  require_once('equipo.php');



  $crud = new CrudEquipo();



  if(isset($_POST['actualizarEquipo']))
  {

  	$elEquipo = new Equipo();
  	$elEquipo->setCodigoEquipo($_POST['cod_equipo']);
  	$elEquipo->setNombreEquipo($_POST['nom_equipo']);
  	$elEquipo->setCodigoEstadio($_POST['cod_estadio']);
  	

  	$crud->modificarJugador($elEquipo);


  }

  elseif(isset($_POST['insertarEquipo']))
  {
    $elEquipo = new Equipo();
    $elEquipo->setCodigoEquipo($_POST['cod_equipo']);
    $elEquipo->setNombreEquipo($_POST['nom_equipo']);
    $elEquipo->setCodigoEstadio($_POST['cod_estadio']);


     $crud->insertar($elEquipo);

     header('Location: insertar_equipo.php');

  }

  elseif($_GET['accion'] =='e')
  {
    $codigoEquipo = $_GET['codigoEquipoParam'];
    $crud->eliminar($codigoEquipo);
    header('Location: insertar_equipo.php');
  }

  elseif($_GET['accion'] =='a')
  {
    header('Location: actualizarEquipo.php');
  }



?>