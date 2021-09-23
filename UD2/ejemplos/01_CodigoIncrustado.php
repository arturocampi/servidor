<!-- PHP y HTML
  Es un lenguaje interpretado y flexible que permite programar con gran rapidez
  En el desarrollo web es habitual utilizar PHP incrustado dentro de ficheros HTML.

  Al solicitar la página al servidor web el servidor procesa los bloques PHP
  y los sustituye por su salida.
  
  Los ficheros PHP deben tener una extensión .PHP 
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo</title>
</head>
<body>
  <h1>
    <!-- Abrir bloque de PHP -->
    <?php 
    $saludo = "Hola Mundo";
    echo $saludo; 
    ?>
    <!-- Cerrar bloque de PHP -->
    </h1>
</body>
</html>