<!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>ejemplo 5</title>
</head><body>
<?php
//inicializamos
// $array1 = array();
// $array1 = [];
echo "Array ordenado inicializado elemento por elemento <hr>";
$array1[]="elemento 0 porque estába vacía";
$array1[]="elemento 1 supongo";
$array1[6]="elemento 6 porque lo digo yo";
$array1[200]="elemento 200 porque lo digo yo tb!";
$array1[]="elemento 201??? Lo veremos";

//volcamos la variable para estudiarla y depurar nuestro código. 
//Con var_dump
var_dump($array1);
//O con print_r
echo "<pre>";
print_r($array1); 
echo "</pre>";

//la podemos recorrer con el bucle foreach de dos maneras:
echo "<hr> Recorrido mediante bucle foreach simple <br>";
foreach ($array1 as $element){
    echo $element . '<br>';
}
//foreach clave->elemento
echo "<hr> Recorrido mediante bucle foreach con posicion->elemento <br>";
foreach ($array1 as $position=>$element){
    echo $position . ": " . $element . '<br>';
}
?>
</body></html>