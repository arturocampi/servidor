<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $equipo[] = 'Jaimito';
    $equipo[] = 'Manolo';
    $equipo[] = 'Paco';
    $equipo[] = 'Patata';
    $equipo[] = 'Pepito';
    echo "Nombres <br>";
    foreach ($equipo as $index) {
        echo "$index <br>";
    };
    echo "<br> Nombres y números <br>";
    foreach ($equipo as $clave => $index) {
        echo "$clave : $index <br>";
    };
    ?>
</body>

</html>