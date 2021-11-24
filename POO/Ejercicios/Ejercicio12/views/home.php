<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: <?= $_SESSION['color'] ?> " ;>
    <h1>Hola!</h1>
    <?php
    echo "<li><a href='?method=colores'>COLORES</a></li>";
    ?>
</body>

</html>