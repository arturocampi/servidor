<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/default.css">
  <style></style>
  <title>Document</title>
</head>
<body>
  <?php
    require('views/header.php');
  ?>
  <h1>Login de  <?= $this->name ?></h1>

  <form action="">
    <label for="">nombre</label>
    <input type="text" name="name"> <br>
    <label for="">contraseña</label>
    <input type="password" name="password"> <br>
    <input type="submit">
  </form>
</body>
</html>