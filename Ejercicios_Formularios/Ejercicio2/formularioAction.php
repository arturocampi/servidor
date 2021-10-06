<?php

    if(isset($_POST) && !empty($_POST)){
        $nombre = $_POST['nombre'];

        if( $nombre != ''){
            echo 'Bienvenido :' . $nombre;
        } else {
            header("Location:ejercicio2.php?r=error");
        }
        
    } 
    ?>