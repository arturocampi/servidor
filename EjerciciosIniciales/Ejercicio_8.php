<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $equipo = ['Pepe','Manolo','Pepito','Mike','Manuel'];
        echo "Nombres <br>";
        foreach($equipo as $index){
            echo "$index <br>";
        };
        echo "<br> Nombres y posición <br>";
        foreach($equipo as $clave => $index){
            echo "$clave : $index <br>";
        };
    ?>
</body>
</html>