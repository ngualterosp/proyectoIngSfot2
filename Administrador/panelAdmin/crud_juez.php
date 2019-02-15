<?php

require_once('conexion.php');
require_once('juez.php');
   class CrudJuez{

   	public function __construct(){}



   	public function insertar($juez)
   	{
   		$db=Db::conectar();
   		$insert=$db->prepare('INSERT INTO juez(nom_juez) values(:nom_juez)');

			
			$insert->bindValue('nom_juez',$juez->getNombreJuez());
			$insert->execute();

			
   	}




   	public function mostrar(){
			$db=Db::conectar();
			$listaJueces=[];
			$select=$db->prepare('SELECT * FROM juez');

			$select->execute();



			foreach($select->fetchAll() as $juez){


				$myJuez= new Juez();
				$myJuez->setCodigoJuez($juez['cod_juez']);
				$myJuez->setNombreJuez($juez['nom_juez']);
			    
				$listaJueces[]=$myJuez;
			}
			return $listaJueces;
		}

	public function eliminar($cod_juez)
	{
		$db=Db::conectar();
		$eliminarJugador = $db->prepare('DELETE FROM juez where cod_juez=:cod_juez');
		$eliminarJugador->bindValue('cod_juez', $cod_juez);
		$eliminarJugador->execute();
	}

	public function modificarJugador($juez)
	{
		$db=Db::conectar();
		$modificar = $db ->prepare('UPDATE juez SET nom_juez=:nom_juez WHERE cod_juez =:cod_juez');
		$modificar->bindValue('cod_juez', $juez->getCodigoJuez());
		$modificar->bindValue('nom_juez', $juez->getNombreJuez());

		$modificar->execute();
	}







   }




?>