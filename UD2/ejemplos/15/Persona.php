<?php

class Persona  
{
  public $nombre;
  public $apellido;
  public $edad;

  public function __construct($nombre, $apellido, $edad)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
  }

  public function saludar()
  {
    echo "Buenos días!";
  }

  public function __toString()
  {
    return $this->nombre;
  }
}
