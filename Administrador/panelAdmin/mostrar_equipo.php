<?php
//incluye la clase noticia y Crudnoticia
require_once('crud_equipo.php');
require_once('equipo.php');
$crud=new CrudEquipo();
$equipo= new Equipo();
$listaEquipos=$crud->mostrar();

?>

<html>
<head>
  <title>Mostrar Equipo</title>
</head>
<body>
  <table border=1>
    <head>
      <td>Nombre Equipo</td>
      <td>Actualizar</td>
      <td>Eliminar</td>
    </head>
    <body>
      <?php foreach ($listaEquipos as $equipo) {?>
      <tr>
        <td><?php echo $equipo->getNombreEquipo() ?></td>
        <td><a href="acciones_equipo.php?codigoEquipoParam=<?php echo $equipo->getCodigoEquipo()?>&accion=a">DD</a></td>
          <td><a href="acciones_equipo.php?codigoEquipoParam=<?php echo $equipo->getCodigoEquipo()?>&accion=e">Eliminar</a></td>
          <td><a href="acciones_equipo.php?accion=i">agregar</a></td>

      </tr>
      <?php } ?>
    </body>
  </table>
  <a href="index.php">Volver</a>
</body>
</html>