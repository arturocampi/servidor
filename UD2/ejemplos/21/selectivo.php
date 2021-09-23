<?php
$id = $_GET['id'];
session_start();
unset($_SESSION['colores'][$id]);
header('Location: index.php');