<?php


 class Jugador{
   private $cod_jugador;
   private $cod_equipo;
   private $nom_jugador;
   private $pos_jugador;
   private $dorsal;
   private $edad;
<<<<<<< HEAD
   private $foto_jugador;
=======
   private $foto;
>>>>>>> master

   function __construct(){}

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
  		return $this->dorsal;
  	}

  	public function setDorsal($nuevaDorsal)
  	{
  		$this->dorsal = $nuevaDorsal;
  	}

  	public function getEdad()
  	{
  		return $this->edad;
  	}

  	public function setEdad($nuevaedad)
  	{
  		$this->edad = $nuevaedad;
  	}

    public function getFoto()
  	{
<<<<<<< HEAD
  		return $this->foto_jugador;
=======
  		return $this->foto;
>>>>>>> master
  	}

  	public function setFoto($nuevafoto)
  	{
<<<<<<< HEAD
  		$this->foto_jugador = $nuevafoto;
  	}

    public function getPosicion()
  	{
  		return $this->pos_jugador;
  	}

  	public function setPosicion($nuevapos)
  	{
  		$this->pos_jugador = $nuevapos;
  	}


=======
  		$this->foto = $nuevafoto;
  	}
>>>>>>> master






 }




?>
