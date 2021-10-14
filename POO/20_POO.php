<?php

/*
* PHP soporta POO desde la versión 5
* Conceptos básicos: clases, objetos, atributos y métodos
* Visibilidad: public, protected, private
* Métodos mágicos: constructor, destructor, toString
* Herencia, interfaces, métodos y atributos estáticos y finales
* 
*/


// Notación
// Una clase -> un fichero, y ambos con el mismo nombre

class ClaseSencilla
{
    // Declaración de una propiedad
    private $var = 'un valor predeterminado';

    //static para declarar atributos y métodos
    //  - No habrá uno por objeto sino uno por clase

    // Declaración de un método
    public function mostrarValor() {
        echo $this->var;
    }

    // $this hace referencia a este objeto
    // "->" se usa para acceder a métodos y atributos
    // :: para acceder a constantes de clase y métodos mágicos

}