<?php

  require_once('crud_juez.php');
  require_once('juez.php');



  $crud = new CrudJuez();



  if(isset($_POST['actualizarJuez']))
  {

  	$elJuez = new Juez();
  	$elJuez->setCodigoJuez($_POST['cod_juez']);
  	$elJuez->setNombreJuez($_POST['nom_juez']);

  	$crud->modificarJuez($elJuez);


  }

 elseif(isset($_POST['insertarJuez']))
  {
    $elJuez = new Juez();
<<<<<<< HEAD
    $elJuez->setNombreJuez($_POST['nom_juez']);
    $crud->insertar($elJuez);
=======
    $elJuez->setCodigoJuez($_POST['cod_juez']);
    $elJuez->setNombreJuez($_POST['nom_juez']);   


     $crud->insertar($elJuez);
>>>>>>> master

     header('Location: plantillaJuez.php');

  }

  elseif($_GET['accion'] =='e')
  {
    $codigoJuez = $_GET['codigoJuezParam'];
    $crud->eliminar($codigoJuez);
    header('Location: plantillaJuez.php');
  }

  elseif($_GET['accion'] =='a')
  {
    header('Location: actualizarJuez.php');
  }

?>
