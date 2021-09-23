<?php

for ( $i = 0; i < 5; $i = $i + 1) {
    echo "$i <br>";
}

$i = 0;
while ($i < 5) {
    echo "$i <br>";
    $i = $i + 1; 
}

$i = 0;
do {
    echo "$i <br>";
    $i = $i + 1; 
} while ($i < 5);

// Sentencia break: sirve para salir de un bucle
$i = 0;
while ($i < 5) {
    echo "$i <br>";
    $i++; 
    if ( $i == 2) {
        break;
    }
}

//Sentencia continue: fuerza una nueva iteración del bucle
for ( $i = 0; i < 5; $i++) {
    if ( $i == 2) {
        continue;
    }
    echo "$i <br>";
}

//Es posible incluir otros ficheros utilizando las sentencias include y require
// include "mifichero.php"
// require "mifichero.php": para la ejecución si no encuentra el fichero


