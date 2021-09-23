<!DOCTYPE html>
<html><head>
  <meta charset="UTF-8">
  <title>ejemplo</title>
</head><body>
  <h2>Lista con formularios:</h2>
  <form action="">
    <input type="text" name="nombres[]">

    <input type="submit" value="Nuevo">
  
    <hr>
    <?php
    if (isset($_GET['nombres'])) {
      foreach($_GET['nombres'] as $nombre) {
        echo '<input type="text" name="nombres[]" value="' . $nombre . '"><br>';
      }
    }
    ?>
  </form>

  
</body></html>