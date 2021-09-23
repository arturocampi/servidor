<?php

$colores= array('rojo', 'verde', 'azul', 'amarillo');
session_start();
$_SESSION['colores'] = $colores;

header('Location: index.php');