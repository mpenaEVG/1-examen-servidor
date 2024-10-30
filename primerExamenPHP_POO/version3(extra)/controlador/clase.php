<?php 

class Formato {
  
  private $nombre;
  private $apellido;
  public $longitud;

  public function __construct($nombre, $apellido) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->longitud = strlen($nombre) + strlen($apellido);
  }



  public function formatoAN(){
    
    $cadenaFormateada = $this->apellido . ", " . $this->nombre;
    return $cadenaFormateada;
  }

  public function formatoNA(){
    $cadenaFormateada = $this->nombre . " " . $this->apellido;
    return $cadenaFormateada;

  }
  public function contarCaracteres() {
    return $this->longitud;
  }
}
