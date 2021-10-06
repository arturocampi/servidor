<?php

if (!empty($_GET['num1']) && !empty($_GET['num2'])) {
    echo "Bienvenido " . $_GET['nombre'] . "<br>";
    //var_dump nos puede ayudar a entender lo que hemos recibido
    echo "<hr><pre>";
    var_dump($_GET);
} else {
    include('formulario.php');
    echo "<p style='color:red';><br>Tiene que tener más de 3 caractéres</p>";
}