<?php

class Cliente extends Persona {
    private $saldo = 0;

    function __construct ($nombre, $apellido, $edad, $saldo) {
        parent::__construct ($nombre, $apellido, $edad);
        $this->saldo = $saldo;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        return $this->saldo = $saldo;
    }

    public function __toString() {
        return "Cliente: ".parent::__toString(). " Saldo: ". $this->saldo;
        //return "Cliente: ".$this->__toString();
    }

    
}
