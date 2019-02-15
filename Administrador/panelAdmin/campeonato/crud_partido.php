<?php

require_once('conexion.php');
require_once('partido.php');
   class CrudPartido{

   	public function __construct(){}



   	public function insertar($partido)
   	{
   		$db=Db::conectar();
   		$insert=$db->prepare('INSERT INTO partido(cod_local, cod_rival, cod_juez, cod_estado) values(:cod_local,:cod_rival,:cod_juez,:cod_estado)');

			$insert->bindValue('cod_local',$partido->getCodigoEquipoLocal());
			$insert->bindValue('cod_rival',$partido->getCodigoEquipoVis());
			$insert->bindValue('cod_juez',$partido->getCodigoJuez());
			$insert->bindValue('cod_estado',$partido->getCodigoEstado());
			$insert->execute();

			
   	}




   	public function mostrar($codigoEquipo){
			$db=Db::conectar();
			$listaPartidos=[];
			$select=$db->prepare('SELECT * FROM partido where cod_local=:cod_equipo or cod_rival=:cod_equipo');
			$select->bindValue('cod_equipo', $codigoEquipo);

			$select->execute();



			foreach($select->fetchAll() as $partido){


				$myPartido= new Partido();
				$myPartido->setCodigoEquipoLocal($partido['cod_local']);

				$myPartido->setCodigoEquipoVis($partido['cod_rival']);
				$myPartido->setCodigoJuez($partido['cod_juez']);
				$myPartido->setCodigoEstado($partido['cod_estado']);
			    
				$listaPartidos[]=$myPartido;
			}
			return $listaPartidos;
		}

	public function eliminar($codigoPartido)
	{
		$db=Db::conectar();
		$eliminarJugador = $db->prepare('DELETE FROM partido where cod_partido=:cod_partido');
		$eliminarJugador->bindValue('cod_jugador', $codigoPartido);
		$eliminarJugador->execute();
	}

	public function modificarPartido($codPartido)
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