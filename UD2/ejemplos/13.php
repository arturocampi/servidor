<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejemplo</title>
    </head>
</head>
<body>
    <?php
    define('SIZE', 10);
    echo "<table border=1>";

    $number = 1;
    for ($row = 1; $row <= SIZE; $row++) {
        if ($row % 2 == 0)
            echo "<tr bgcolor = gainsboro>";
        else
            echo "<tr>";
        for ($column = 1; $column <= SIZE; $column++) {
            echo "<td>", $number, "</td>";
            $number = $number + 1;
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>