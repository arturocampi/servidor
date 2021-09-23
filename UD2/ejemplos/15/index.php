<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplos</title>
</head>
<body>
  <?php
    require('Persona.php');
    $juan = new Persona('Juan', 'García', 15);

    echo $juan-> saludar();
    echo "<br>";
    echo "Soy $juan";
    echo "<br>";
    echo "Mi nombre completo es $juan->nombre $juan->apellido y tengo $juan->edad años";
  ?>
</body>
</html>
