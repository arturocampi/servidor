<?php

/*
* El tipo array unifica todas las estructuras de datos (vectores, listas o diccionario)
* Los elementos de un array se identifican por una clave que puede ser un entero o una cadena
* El orden está determinado por la inserción
*/


//Declarar un array sin claves
$arr = array ( 10, 20, 30, 40);
print_r($arr);
echo "<br>";
$arr[] = 5;
print_r($arr);
echo "<br>";
$arr[10] = 6;
$arr[] = 5;
print_r($arr);
echo "<br>";

//Declarar un array usando la notación de corchetes
$arr1 = [
    0 => 444,
    1 => 222,
    2 => 333
];
print_r($arr1);
echo "<br>"."pos 0: ".$arr1[0]."<br>";
$arr1[0] = 555;
print_r($arr1);
echo "<br>";

$arr2 = array (
    "1111A" => "Marta Lopez Vela",
    "1112A" => "Luis Perez Tovar",
    "1113A" => "Elena Molina Garzarán"   
);
$arr2["1113A"] = "Elena Molina Gonzalvo"; 

//Recorrer un bucle
foreach ($arr2 as $nombre) {
    echo "$nombre <br>";
}

foreach ($arr2 as $codigo => $nombre) {
    echo "Código: $codigo Nombre: $nombre <br>";
}

//Modificar el array dentro de un bucle
foreach ($arr1 as &$cantidad) {
    $cantidad = $cantidad * 2;
}
print_r($arr1);

