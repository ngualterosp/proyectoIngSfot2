<?php

require_once('conexion.php');
require_once('jugador.php');
   class CrudJugador{

   	public function __construct(){}




    public function obtenerJugador($codJugador)
    {
    	 $db=Db::conectar();
    	 $select=$db->prepare('SELECT * FROM jugador WHERE cod_jugador=:cod_jugador');
    	 $select->bindValue('cod_jugador',$codJugador);
    	 $select->execute();
    	 $jugador=$select->fetch();
    	 $elJugador = new Jugador();
    	 $elJugador->setCodigoJugador($jugador['cod_jugador']);
    	 $elJugador->setCodigoEquipo($jugador['cod_equipo']);
    	 $elJugador->setNombre($jugador['nom_jugador']);
       $elJugador->setPosicion($jugador['pos_jugador']);
    	 $elJugador->setDorsal($jugador['dorsal']);
    	 $elJugador->setEdad($jugador['edad']);
       $elJugador->setFoto($jugador['foto_jugador']);

    	 return $elJugador;


    }
   	public function insertar($jugador)
   	{
   		$db=Db::conectar();
<<<<<<< HEAD
   		$insert=$db->prepare('INSERT INTO jugador(cod_equipo, nom_jugador, pos_jugador, dorsal, edad, foto_jugador) values(:cod_equipo,:nom_jugador,:pos_jugador, :dorsal,:edad,:foto_jugador)');
=======
   		$insert=$db->prepare('INSERT INTO jugador(cod_equipo, nom_jugador, dorsal, edad, foto) values(:cod_equipo,:nom_jugador,:num_dorsal,:edad,:foto)');
>>>>>>> master

			$insert->bindValue('cod_equipo',$jugador->getCodigoEquipo());
			$insert->bindValue('nom_jugador',$jugador->getNombre());
      $insert->bindValue('pos_jugador',$jugador->getPosicion());
			$insert->bindValue('dorsal',$jugador->getDorsal());
			$insert->bindValue('edad',$jugador->getEdad());
<<<<<<< HEAD
      $insert->bindValue('foto_jugador',$jugador->getFoto());

=======
      $insert->bindValue('foto',$jugador->getFoto());
>>>>>>> master
			$insert->execute();


   	}




   	public function mostrar($codigoEquipo){
			$db=Db::conectar();
			$listaJugadores=[];
			$select=$db->prepare('SELECT * FROM jugador where cod_equipo=:cod_equipo');
			$select->bindValue('cod_equipo', $codigoEquipo);

			$select->execute();



			foreach($select->fetchAll() as $jugador){


				$myJugador= new Jugador();
				$myJugador->setCodigoJugador($jugador['cod_jugador']);
				$myJugador->setCodigoEquipo($jugador['cod_equipo']);
				$myJugador->setNombre($jugador['nom_jugador']);
        $myJugador->setPosicion($jugador['pos_jugador']);
				$myJugador->setDorsal($jugador['dorsal']);
<<<<<<< HEAD
			    $myJugador->setEdad($jugador['edad']);
          $myJugador->setFoto($jugador['foto_jugador']);

=======
			  $myJugador->setEdad($jugador['edad']);
>>>>>>> master

				$listaJugadores[]=$myJugador;
			}
			return $listaJugadores;
		}

	public function eliminar($cod_jugador)
	{
		$db=Db::conectar();
		$eliminarJugador = $db->prepare('DELETE FROM jugador where cod_jugador=:cod_jugador');
		$eliminarJugador->bindValue('cod_jugador', $cod_jugador);
		$eliminarJugador->execute();
	}

	public function modificarJugador($jugador)
	{
		$db=Db::conectar();
		$modificar = $db ->prepare('UPDATE jugador SET cod_equipo=:cod_equipo, nom_jugador=:nom_jugador, pos_jugador=:pos_jugador, dorsal =:dorsal, edad=:edad, foto_jugador=:foto_jugador WHERE cod_jugador =:cod_jugador');
		$modificar->bindValue('cod_jugador', $jugador->getCodigoJugador());
		$modificar->bindValue('cod_equipo', $jugador->getCodigoEquipo());
		$modificar->bindValue('nom_jugador', $jugador->getNombre());
    $modificar->bindValue('pos_jugador', $jugador->getPosicion());
		$modificar->bindValue('dorsal', $jugador->getDorsal());
		$modificar->bindValue('edad', $jugador->getEdad());
    $modificar->bindValue('foto_jugador', $jugador->getFoto());


		$modificar->execute();
	}

  public function obtenerGoleador()
  {

    $listaJugadores=[];
        $db=Db::conectar();
      $select=$db->prepare('SELECT  DISTINCT * FROM jugador ORDER BY cod_jugador DESC LIMIT 4');

      $select->execute();
       foreach ($select->fetchAll() as $jugador)
       {

         $myJugador= new Jugador();

         $myJugador->setCodigoJugador($jugador['cod_jugador']);
         $myJugador->setCodigoEquipo($jugador['cod_equipo']);
         $myJugador->setNombre($jugador['nom_jugador']);
         $myJugador->setPosicion($jugador['pos_jugador']);
         $myJugador->setDorsal($jugador['dorsal']);
           $myJugador->setEdad($jugador['edad']);
           $myJugador->setFoto($jugador['foto_jugador']);


        $listaJugadores[] = $myJugador;

       }
       return $listaJugadores;
  }







   }




?>
