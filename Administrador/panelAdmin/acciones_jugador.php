<?php

  require_once('crud_jugador.php');
  require_once('jugador.php');



  $crud = new CrudJugador();



  if(isset($_POST['actualizarJugador']))
  {

  	$elJugador = new Jugador();
  	$elJugador->setCodigoJugador($_POST['cod_jugador']);
  	$elJugador->setCodigoEquipo($_POST['cod_equipo']);
  	$elJugador->setNombre($_POST['nom_jugador']);
  	$elJugador->setDorsal($_POST['num_dorsal']);
  	$elJugador->setEdad($_POST['edad']);
  	

  	$crud->modificarJugador($elJugador);


  }

  elseif(isset($_POST['insertarJugador']))
  {
  	 $elJugador = new Jugador();
     $elJugador->setCodigoEquipo($_POST['equipoParam']);
     $elJugador->setNombre($_POST['nombreJugadorParam']);
     $elJugador->setDorsal($_POST['dorsalParam']);
     $elJugador->setEdad($_POST['edadParam']);


     $crud->insertar($elJugador);

     header('Location: insertar_jugador.php');

  }

  elseif($_GET['accion'] =='e')
  {
    $codigoJugador = $_GET['codigoJugadorParam'];
    $crud->eliminar($codigoJugador);
    header('Location: insertar_jugador.php');
  }


?>