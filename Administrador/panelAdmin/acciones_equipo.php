<?php

  require_once('crud_equipo.php');
  require_once('equipo.php');



  $crud = new CrudEquipo();



  if(isset($_POST['actualizarEquipo']))
  {

  	$elEquipo = new equipo();
  	$elEquipo->setCodigoEquipo($_POST['cod_equipo']);
  	$elEquipo->setNombreEquipo($_POST['nom_equipo']);
  	$elEquipo->setCodigoEstadio($_POST['cod_estadio']);
  	

  	$crud->modificarJugador($elEquipo);


  }

  elseif(isset($_POST['insertarJugador']))
  {
  	$
  }


?>