<?php
/*
* Las estructuras de control son muy similares a Java
*/

$var = 3;
if ( $var < 0 ) echo "Es menor que cero";


if ( $var > 0) {
    echo "Es mayor que cero";
} else {
    echo "Es menor o igual que cero";
}

$var = 3;
if ( $var == 1) {
    echo "Es un uno";
} elseif ( $var == 2) {
    echo "Es un dos";
} elseif ($var == 3) {
    echo "Es un tres";
} else {
    echo "No es uno, ni dos, ni tres"; 
}


// Si no hay un break al final de un case, la ejecución continua con el siguiente
$var = 3;
switch ( $var ) {
    case 1:
        echo "Es un uno";
    break;
    case 2:
        echo "Es un dos";
    break;
    case 3:
        echo "Es un tres";
    break;
    default: 
        echo "No es uno, ni dos, ni tres"; 
}



