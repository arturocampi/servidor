<?php

session_start();
unset($_SESSION['colores'][1]);
header('Location: index.php');