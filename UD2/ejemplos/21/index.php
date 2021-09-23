<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Sesiones</h1>
  Hola me llamo <?= $_SESSION['name'] ?>

    <br>
    <a href="guardar1.php">guardar nombre </a>
    <br>
    <a href="eliminar.php">borrar nombre </a>
    <br>
    <br>
    <a href="guardar2.php">guardar colores </a>
    <br>
    <a href="eliminar2.php">borrar verde </a>
    <br>
    <br>
    <a href="cerrar.php">cerrar sesión </a>

  <h1>Lista de colores</h1>
  <ul>
    <?php
    foreach($_SESSION['colores'] as $id => $color) {
    ?>
      <li><?= $color ?> <a href="selectivo.php?id=<?= $id ?>">borrar</a> </li>
    <?php
    }
    ?>

  </ul>
  <p>Volcado de la sesión</p>
  <pre>
  <?php
  var_dump($_SESSION);
  ?>
  </pre>
</body>
</html>