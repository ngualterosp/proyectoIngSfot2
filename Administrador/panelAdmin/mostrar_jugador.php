<?php
//incluye la clase noticia y Crudnoticia
require_once('crud_jugador.php');
require_once('jugador.php');
$crud=new CrudJugador();
$jugador= new Jugador();
//obtiene todos las noticias con el método mostrar de la clase crud
$codigoEquipo = $_GET['cod_equipo'];
$listaJugadores=$crud->mostrar($codigoEquipo);



?>

<html>
<head>
  <title>Mostrar Jugador</title>
</head>
<body>
  <table border=1>
    <head>
      <td>Nombre Jugador</td>
      <td>Dorsal</td>
      <td>Edad</td>
      <td>Actualizar</td>
      <td>Eliminar</td>
    </head>
    <body>
      <?php foreach ($listaJugadores as $jugador) {?>
      <tr>
        <td><?php echo $jugador->getNombre() ?></td>
        <td><?php echo $jugador->getDorsal() ?></td>
        <td><?php echo $jugador->getEdad()?> </td>
        <td><a href="acciones_jugador.php?codigoJugadorParam=<?php echo $jugador->getCodigoJugador()?>&accion=a">DD</a></td>
          <td><a href="acciones_jugador.php?codigoJugadorParam=<?php echo $jugador->getCodigoJugador()?>&accion=e">Eliminar</a></td>
      </tr>
      <?php } ?>
    </body>
  </table>
  <a href="index.php">Volver</a>
</body>
</html>