<?php
//incluye la clase noticia y Crudnoticia
require_once('crud_juez.php');
require_once('juez.php');
$crud=new CrudJuez();
$juez= new Juez();
//obtiene todos las noticias con el método mostrar de la clase crud
$listaJueces=$crud->mostrar();



?>

<html>
<head>
  <title>Mostrar Juez</title>
</head>
<body>
  <table border=1>
    <head>
      <td>Nombre Juez</td>
      <td>Actualizar</td>
      <td>Eliminar</td>
    </head>
    <body>
      <?php foreach ($listaJueces as $juez) {?>
      <tr>
        <td><?php echo $juez->getNombreJuez() ?></td>
        <td><a href="acciones_juez.php?codigoJuezParam=<?php echo $juez->getCodigoJuez()?>&accion=a">DD</a></td>
          <td><a href="acciones_juez.php?codigoJuezParam=<?php echo $juez->getCodigoJuez()?>&accion=e">Eliminar</a></td>
          <td><a href="acciones_juez.php?accion=i">agregar</a></td>

      </tr>
      <?php } ?>
    </body>
  </table>
  <a href="index.php">Volver</a>
</body>
</html>