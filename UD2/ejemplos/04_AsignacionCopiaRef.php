<?php

//Definir una constate
define ("MAXSIZE", 100);
echo MAXSIZE;

//Otra forma 
const CONSTANTE = "Hola Mundo";
echo CONSTANTE;

//La asignación se realiza por copia
//Las variables representan posiciones de memoria diferentes
$a = "Hola";
$a = $b; //asignación por copia

//Para definir una referencia
$var1 = 100;
$var2 = &$var1; //asignación por referencia 
echo "$var2<br>";
$var2 = 300;
echo "$var1<br>";