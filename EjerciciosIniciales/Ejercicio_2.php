<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>f

<body>
    <?php
    $nombre = 'Arturo';
    $direccion = 'Calle de la Yuca';
    $mail = 'patata@gmail.com';
    echo " 
    <table>
    <tr>
        <td>Nombre</td>
        <td>Direccion</td>
        <td>Mail</td>
    </tr>
    <tr>
    <th>$nombre</th>
    <th>$direccion</th>
    <th>$mail</th>  
    </tr>
    </table>";
    ?>

</body>

</html>