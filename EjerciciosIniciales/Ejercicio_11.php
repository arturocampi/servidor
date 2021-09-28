<?php
$paises = array(
    'España' => array(
        'moneda' => 'Euro',
        'poblacion' => '47000000'
    ),
    'Estados Unidos' => array(
        'moneda' => 'Dollar',
        'poblacion' => '85000000'
    ),
    'China' => array(
        'moneda' => 'Yen',
        'poblacion' => '250000000'
    ),
    'Rusia' => array(
        'moneda' => 'Rublo',
        'poblacion' => '120000000'
    ),
);
echo "<br> Nombre y posición <br>";
foreach ($paises as $clave => $index) {
    echo "$clave : $index <br>";
};
