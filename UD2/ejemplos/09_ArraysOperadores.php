<?php

$arr1 = array (
    1 => "3000",
    2 => "4000"
);

$arr2 = array (
    1 => 3000,
    2 => 4000
);

$arr3 = array (
    2 => "4000",
    1 => "3000"
);


// Igual -> Verdadero si los dos arrays tienen las claves y valores iguales
if ( $arr1 == $arr2) {
    echo "arr1 y arr2 son iguales";
} else {
    echo "arr1 y arr2 NO son iguales";
}

if ( $arr1 == $arr3) {
    echo "arr1 y arr3 son iguales";
} else {
    echo "arr1 y arr3 NO son iguales";
}

// Idéntico -> Verdadero si dos arrays tienen las claves y valores iguales, en el mismo orden y del mismo tipo
if ( $arr1 === $arr2) {
    echo "arr1 y arr2 son idénticos";
} else {
    echo "arr1 y arr2 NO son idénticos";
}

if ( $arr1 === $arr3) {
    echo "arr1 y arr3 son idénticos";
} else {
    echo "arr1 y arr3 NO son idénticos";
}


// Unión de arrays
$arr3 = $arr1 + $arr2;
print_r($arr3);


