<?php

$name = $_FILES['fichero1']['name'];
$size = $_FILES['fichero1']['size'];
$name2 = $_FILES['fichero2']['name'];
$size2 = $_FILES['fichero2']['size'];
echo "Nombre del fichero. ".$_FILES["fichero1"]["name"];
echo  '$name2'+'size2'+'<br>';

$res = move_uploaded_file ($_FILES["fichero1"]["tmp_name"], "archivos_subidos/".$_FILES["fichero1"]["name"]);
$res2 = move_uploaded_file ($_FILES["fichero2"]["tmp_name"], "archivos_subidos/".$_FILES["fichero2"]["name"]);

if ($res && $res2) {
    echo "<br>Ficheros guardados";
} else {
    echo "<br>Error";
}