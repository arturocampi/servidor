<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookies</title>
</head>
<body>
  <h1>Ejemplo con cookies</h1>
  <p>¿Tenemos alguna cookie?</p>

  <?php
  if (empty($_COOKIE)) {
    echo "No hay cookies disponibles<br>";
    echo "<a href=?method=setcookie>Crear cookies</a>";
  } else {    
    echo "Parece que sí:";
    echo "Usuario es $user<br>";

    echo "Aficiones: <br><ul>";
    foreach ($hobbies as $value) {
      echo "<li>$value</li>";
    }
    echo "</ul>";
    echo "Persona: <br><ul>";
    foreach ($persona as $key => $value) {
      echo "<li>$key: $value</li>";
    }
    echo "</ul>";    

    echo "<hr>";
    echo "Aficiones (json): <br><ul>";
    foreach ($hobbies2 as $value) {
      echo "<li>$value</li>";
    }
    echo "</ul>";
    echo "Persona (json): <br><ul>";
    foreach ($persona2 as $key => $value) {
      echo "<li>$key: $value</li>";
    }
    echo "</ul>";    

    echo "<pre>";
    var_dump($_COOKIE);

    var_dump($persona);
    var_dump($persona2);
  }
  ?>  
</body>
</html>