<?php

require_once('conexion.php');
require_once('jugador.php');
   class CrudJugador{

   	public function __construct(){}



   	public function insertar($jugador)
   	{
   		$db=Db::conectar();
   		$insert=$db->prepare('INSERT INTO jugador(cod_equipo, nom_jugador, num_dorsal, edad) values(:cod_equipo,:nom_jugador,:ruta_imagen)');

			$insert->bindValue('cod_equipo',$jugador->getCodigoEquipo());
			$insert->bindValue('nom_jugador',$jugador->getNombre());
			$insert->bindValue('num_dorsal',$jugador->getDorsal());
			$insert->bindValue('edad',$jugador->getEdad());
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
				$myJugador->setDorsal($jugador['num_dorsal']);
			    $myJugador->setFecha($jugador['edad']);
			    
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
		$modificar = $db ->prepare('UPDATE jugador SET cod_equipo=:cod_equipo, nom_jugador=:nom_jugador, num_dorsal =:num_dorsal, edad=:edad WHERE cod_jugador =:cod_jugador');
		$modificar->bindValue('cod_jugador', $jugador->getCodigoJugador());
		$modificar->bindValue('cod_equipo', $jugador->getCodigoEquipo());
		$modificar->bindValue('nom_jugador', $jugador->getNombre());
		$modificar->bindValue('num_dorsal', $jugador->getDorsal());
		$modificar->bindValue('edad', $jugador->getEdad());

		$modificar->execute();
	}







   }




?>