<?php

// NÚMEROS
echo PHP_INT_SIZE.'<br>';
echo PHP_INT_MIN.'<br>';
echo PHP_INT_MAX.'<br>';

$a = 0b100; //binario
$a = 0100;  //octal
$a = 0x100; //hexadecimal
$a = 3/2; //La división entre enteros no da problemas
echo $a.'<br>';

/*  La conversión entre integer y float es automática
        Si se recibe float cuando se espera un integer -> se trunca
        Si al realiza una operación con un estero tiene deciamales -> se convierte a float
        También se pueden utilizar los operadores de conversión
*/
$b = 7.5;
$a = (int) $b; //casting a int

//CADENAS
$var = "Paco";
$a = "Hola $var <br>"; //comillas mágicas las variables se sustituyen
$b = 'Hola $var';
echo $a;
echo $b;

//Otros tipos de datos
//array: colecciones de elementos
//object: para la programación orientada a objetos
//callable: tipo de datos para expresar las funciones de callback (funciones que se pasan a otras funciones)
//null: variable inicializada a null o variable no inicializada
//resource: representa recursos externos, como una conexión a una BD