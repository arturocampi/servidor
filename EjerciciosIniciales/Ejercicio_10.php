<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $equipo = array(
        'base' => 'Jaimito',
        'escolta' => 'Manolo',
        'alero' => 'Paco',
        'alapivot' => 'Patata',
        'pivot' => 'Pepito'
    );
    echo "<br> Nombre y posición <br>";
    foreach ($equipo as $clave => $index) {
        echo "$clave : $index <br>";
    };
    ?>
</body>

</html>