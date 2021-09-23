<?php
//aprobechamos para ver un par de funciones para el manejo de variables.
//isset comprueba si una variable está definida y no es null
//empty comprueba si una variable contiene algún valor distinto de 0 o false
echo '<meta charset="UTF-8">';
if(isset($_POST) && !empty($_POST)){
    echo "Recibido!! Mira la URL en tu navegador. Está 'limpia' <hr>";
    echo "Bienvenido $_POST[nombre]";
    //var_dump nos puede ayudar a entender lo que hemos recibido
    echo "<hr><pre>";
    var_dump($_POST);
}
 else {
     echo "No hemos recibido nada!";
}
