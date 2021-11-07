<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Bienvenido <?= $_COOKIE['user'] ?></h3>
    <h3>Esta es tu lista de deseos!</h3>
    <hr>
    <h3><a href="?method=empty">Borar la lista de deseos</a></h3>
</body>

</html>

<?php
if (count($_SESSION['list'])) {
    foreach ($_SESSION['list'] as $key => $value) {
        echo "<li>$key: $value <a href='?method=delete&id=$key'>BORRAR</a></li>";
    }
} else {
    echo '<h3>Tu lista de deseos está vacía, añade algo!</h3>';
}
?>

<h2>Alta de nuevos deseos</h2>
<form method="POST" action="?method=new">
    <label>item</label><input type="text" name="new">
    <input type="submit" value="añadir">
</form>
<form method="POST action="?method="close">
    <input type="submit" value="Log Out">
</form>