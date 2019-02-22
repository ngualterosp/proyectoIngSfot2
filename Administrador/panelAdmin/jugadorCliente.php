<!DOCTYPE html>
<?php

    require_once ('crud_jugador.php');
    require_once ('jugador.php');
    require_once('conexion.php');




    $crud = new CrudJugador();
    $jugador = new Jugador();

    $listaJugadores = $crud->obtenerGoleador();

  ?>
  <html>
  <title>Goleadores</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <body id="myPage">

    <div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>MÁXIMOS GOLEADORES</h2>

    <?php foreach ($listaJugadores as $jugador) {

      # code...
    ?>


    <div class="w3-quarter">
      <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($jugador->getFotoJugador())); ?>" style="width:60%;min-height:200px">
      <h3><?php echo $jugador->getNombre()?></h3>
      <p><?php echo $jugador->getPosicion()?></p>
      <p><?php echo $jugador->getDorsal()?></p>
      <p><?php echo $jugador->getEdad()?></p>

    </div>

  <?php } ?>

</div>

<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>MÁXIMOS ASISTENTES</h2>

<?php foreach ($listaJugadores as $jugador) {

  # code...
?>

<div class="w3-quarter">
  <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($jugador->getFotoJugador())); ?>" style="width:60%;min-height:200px">
  <h3><?php echo $jugador->getNombre()?></h3>
  <p><?php echo $jugador->getPosicion()?></p>
  <p><?php echo $jugador->getDorsal()?></p>
  <p><?php echo $jugador->getEdad()?></p>

</div>


<?php } ?>

</div>

<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>MALLA MENOS VENCIDA</h2>

<?php foreach ($listaJugadores as $jugador) {

  # code...
?>

<div class="w3-quarter">
  <img src="data:image/jpg;base64, <?php echo base64_encode(stripslashes($jugador->getFotoJugador())); ?>" style="width:60%;min-height:200px">
  <h3><?php echo $jugador->getNombre()?></h3>
  <p><?php echo $jugador->getPosicion()?></p>
  <p><?php echo $jugador->getDorsal()?></p>
  <p><?php echo $jugador->getEdad()?></p>

</div>

<?php } ?>

</div>


</body>
</html>
