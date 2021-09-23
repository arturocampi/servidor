<?php

$name = "Juan Ramón";
session_start();
$_SESSION['name'] = $name;
header('Location: index.php');
echo "guardado";
