<?php
echo "Nombre del fichero. ".$_FILES["fichero1"]["name"]."<br>";
echo "Nombre del fichero. ".$_FILES["fichero2"]["name"]."<br>";

/*
$res = move_uploaded_file ($_FILES["fichero1"]["tmp_name"], "archivos_subidos/".$_FILES["fichero1"]["name"]);
$res2 = move_uploaded_file ($_FILES["fichero2"]["tmp_name"], "archivos_subidos/".$_FILES["fichero2"]["name"]);
*/

if ($res && $res2) {
    echo "<br>Ficheros guardados";
} else {
    echo "<br>Error";
}

$index_fichero = count($_FILES['fichero']['name']);
var_dump($_FILES['fichero']);
for ($i=1; $i < $index_fichero; $i++) { 
    echo "Nombre del fichero. ".$_FILES["fichero[$i]"]["name"][$i]."<br>";
    $res = move_uploaded_file ($_FILES["fichero"]["tmp_name"][$i], "archivos_subidos/".$_FILES["fichero"]["name"][$i]);
}