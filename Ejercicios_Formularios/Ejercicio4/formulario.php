<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio 4</h1>
    <form method="GET" action="">
        <label for="num1"></label>
        <input type="text" name="num1" id="num1"><br>
        <label for="num2"></label>
        <input type="text" name="num2" id="num2"><br>
        <label for="operacion"></label>

        <select name="operacion">
            <option id="suma">Suma</option>
            <option id="resta">Resta</option>
            <option id="multiplicacion">Multiplicacion</option>
            <option id="division">Division</option>
            <option id="modulo">Modulo</option>
        </select>

        <input type="submit" name="button" id="button" value="enviar">

    </form>
    <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operacion = $_GET['operacion'];
    /*
    if(!empty($num1) && !empty($num2)){
    */
        if ($operacion == 'Suma') {
            $result = $num1 + $num2;
            echo 'El resultado de la suma es: ' .$result;
        }
        if ($operacion == 'Resta') {
            $result = $num1 - $num2;
            echo 'El resultado de la resta es: ' .$result;
        }
        if ($operacion == 'Multiplicacion') {
            $result = $num1 * $num2;
            echo 'El resultado de la multiplicacion es: ' .$result;
        }
        if ($operacion == 'Division') {
            $result = $num1 / $num2;
            echo 'El resultado de la division es: ' .$result;
        }
        if ($operacion == 'Modulo') {
            $result = $num1 % $num2;
            echo 'El resultado de la modulo es: ' .$result;
        }
    /*}else{
        header("Location:formulario.php");
        echo "<p style='color:red';><br>Introduce valores en los campos</p>";
    }*/
    ?>
</body>

</html>