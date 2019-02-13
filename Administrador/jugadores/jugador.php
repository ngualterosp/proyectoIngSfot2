<?php


 class Jugador{
   private $cod_jugador;
   private $cod_equipo;
   private $nom_jugador;
   private $num_dorsal;
   private $edad;

   function __construct()

   public function getCodigoJugador()
  	{
  		return $this->cod_jugador;
  	}

    public function setCodigoJugador($nuevoCodJugador)
  	{
  		 $this->cod_jugador = $nuevoCodJugador;
  	}

  	public function getCodigoEquipo()
  	{
  		return $this->cod_equipo;
  	}

  	public function setCodigoEquipo($codNuevo)
  	{
  		$this->cod_equipo = $codNuevo;
  	}
  	public function getNombre()
  	{
  		return $this->nom_jugador;
  	}

  	public function setNombre($nuevoNom)
  	{
  		$this->nom_jugador = $nuevoNom;
  	}
  	public function getDorsal()
  	{
  		return $this->num_dorsal;
  	}

  	public function setDorsal($nuevaDorsal)
  	{
  		$this->num_dorsal = $nuevaDorsal;
  	}

  	public function getEdad()
  	{
  		return $this->edad;
  	}

  	public function setEdad($nuevaedad)
  	{
  		$this->edad = $nuevaedad;
  	}

  	






 }




?>