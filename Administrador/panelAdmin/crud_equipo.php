<?php

require_once('conexion.php');
require_once('equipo.php');

   class CrudEquipo{

   	public function __construct(){}



   	public function insertar($equipo)
   	{
   		$db=Db::conectar();
   		$insert=$db->prepare('INSERT INTO equipo(cod_equipo, nom_equipo, cod_estadio) values(:cod_equipo,:nom_equipo,:cod_estadio)');

			$insert->bindValue('cod_equipo',$equipo->getCodigoEquipo());
			$insert->bindValue('nom_equipo',$equipo->getNombreEquipo());
			$insert->bindValue('cod_estadio',$equipo->getCodigoEstadio());
			$insert->execute();
   	}




   	public function mostrar(){
			$db=Db::conectar();
			$listaEquipos=[];
			$select=$db->prepare('SELECT * FROM equipo');

			$select->execute();



			foreach($select->fetchAll() as $equipo){


				$myEquipo= new Equipo();
				$myEquipo->setCodigoEquipo($equipo['cod_equipo']);
				$myEquipo->setNombreEquipo($equipo['nom_equipo']);
				$myEquipo->setCodigoEstadio($equipo['cod_estadio']);
			    
				$listaEquipos[]=$myEquipo;
			}
			return $listaEquipos;
		}

	public function eliminar($cod_equipo)
	{
		$db=Db::conectar();
		$eliminarEquipo = $db->prepare('DELETE FROM equipo where cod_equipo=:cod_equipo');
		$eliminarEquipo->bindValue('cod_equipo', $cod_equipo);
		$eliminarEquipo->execute();
	}

	public function modificarJugador($equipo)
	{
		$db=Db::conectar();
		$modificar = $db ->prepare('UPDATE equipo SET nom_equipo=:nom_equipo, cod_estadio=:cod_estadio WHERE cod_equipo =:cod_equipo');
		$modificar->bindValue('cod_equipo', $equipo->getCodigoEquipo());
		$modificar->bindValue('nom_equipo', $equipo->getNombreEquipo());
		$modificar->bindValue('cod_estadio', $equipo->getCodigoEstadio());

		$modificar->execute();
	}







   }




?>