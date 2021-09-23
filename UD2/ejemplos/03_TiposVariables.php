<?php
/*
    PHP es un lenguaje no fuertemente tipado:
        no es necesario declarar el tipo de dato al declarar una variable.
        Las variables no se declaran, se crean la primera vez que se les asigna un valor
        El tipo de dato depende del valor con el que se inicialicen.
        Ventajas: agiliza la escritura de programas.
        Inconvenientes: puede dar lugar a un código de baja calidad 
    
    Nosotros usaremos el standar de codificación de Zend:
        Variables con estilo "$camelCase".
        Las concatenaciones con espacios a ambos lados del punto.
*/

// La información se muestra con echo y print
$variable = 5 ;
echo 'Nuestra  variable vale: ' . $variable . '<br>'; //Con puntos
print 'Nuestra  variable vale: ' . $variable . '<br>';//Con puntos
echo 'Nuestra  variable vale: ' , $variable , '<br><hr>'; //Con comas


//Tipos de datos básicos: entero, flotante, booleano, cadena
$anInteger = 3;
$aFloat = 3.1416;
$aString = "Hola ";
$anotherString = 'mundo';
$aBoolean = true; // recomendación Zend, en minúsculas.
$anotherBoolean = false;
print($aString . $anotherString . '<hr>');
echo gettype($aString) . '<hr>';


//podemos usar texto con comillas simples y dobles.
//más habitual las simples y dejamos las dobles para el html
//sin embargo las dobles permiten embeber variables en cadenas de texto:
echo  "Un numero entero es $anInteger <br>";
echo 'Un numero entero es $anInteger <br>';


// ojo!! echo no muestra los "false".
echo 'Una variable booleana cierta se imprime como ' . $aBoolean . ' y la otra como ' . $anotherBoolean;


/*
    Variables no inicializadas
        Al usar una variable no inicializada se genera el error E_NOTICE
        Pero no se interrumpe la ejecución del script
    
    Si una variable no incializada aparece dentro de una expresión
        -> La expresión se calcula tomando el valor por defecto para ese tipo de dato
*/
$var1 = 100;
$var3 = 100 + $var2; //var2 no existe, se toma como 0
echo "<br> $var3 <br>";

isset($var1); //True si existe
empty($var1); //True si no existe o su valor es 0 o ""