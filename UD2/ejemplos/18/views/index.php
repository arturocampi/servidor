<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/default.css">
  <title>Document</title>
</head>
<body>
  <?php
  require('views/header.php');
  ?>
  <h1>Home de <?= $this->name ?></h1>
  <div>
  Estamos en el index
  </div>

  Me llamo <?= $this->student ?>
  <br>
  Estamos estudiando <?= $this->module ?> con el profesor <?= $app->teacher ?>
</body>
</html>