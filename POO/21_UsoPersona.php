<?php
    require('Persona.php');
    require('Cliente.php');
    $p1 = new Persona ('Juan', 'García', 18);
    echo "hola";
    echo $p1->saludar();
    echo "<br>";
    echo "Soy $p1";
    echo "<br>";
    echo "Mi nombre completo es ".$p1->getNombre();
    $c1 = new Cliente ('Juan', 'García', 18, 200);

    echo "<br>";
    $persona = new Cliente ('Manolito','Gafotas', 65, 1200);
    echo $persona->__toString();
