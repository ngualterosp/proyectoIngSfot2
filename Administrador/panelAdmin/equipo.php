<?php


 class Equipo{
   private $cod_equipo;
   private $nom_equipo;
   private $cod_estadio;

   function __construct()

   public function getCodigoEquipo()
  	{
  		return $this->cod_equipo;
  	}

    public function setCodigoEquipo($nuevoCodEquipo)
  	{
  		 $this->cod_equipo = $nuevoCodEquipo;
  	}

  	public function getNombreEquipo()
  	{
  		return $this->nom_equipo;
  	}

  	public function setNombreEquipo($nuevoNom)
  	{
  		$this->nom_equipo = $nuevoNom;
  	}
  	public function getCodigoEstadio()
  	{
  		return $this->cod_estadio;
  	}

  	public function setCodigoEstadio($nuevaCodEstadio)
  	{
  		$this->cod_estadio = $nuevaCodEstadio;
  	}

}

?>