<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Podemos hacer un var_dump para investigar</h1>

<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>
<h1>Podemos usar foreach</h1>
<?php
foreach ($_SERVER as $key => $value) {
    echo "<li>$key: $value</li>";
}
?>
    
<h1>Y podemos acceder a aquello que buscamos</h1>
Fichero: 
<?php
echo $_SERVER['SCRIPT_FILENAME'];
?>
</body>
</html>
