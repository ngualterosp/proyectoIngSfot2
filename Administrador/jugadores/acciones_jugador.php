<?php

  require_once('crud_jugador.php');
  require_once('jugador.php');



  $crud = new CrudJugador();



  if(isset($_POST['actualizarJugador']))
  {

  	$elJugador = new Jugador();
  	$elJugador->setCodigoJugador($_POST['cod_jugador']);
  	$elJugador->setCodigoEquipo($_POST['cod_equipo']);
  	$elJugador->setNombrer($_POST['nom_jugador']);
  	$elJugador->setDorsal($_POST['num_dorsal']);
  	$elJugador->setEdad($_POST['edad']);
  	

  	$crud->modificarJugador($elJugador);


  }

  elseif(isset($_POST['insertarJugador']))
  {
  	$
  }


?>