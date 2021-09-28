<?php
$num = 192;
$noPrimo = false;
for ($i = 2; $i <= $num - 1; $i++) {
    if ($num % $i == 0) {
        echo "$i es divisor de $num <br>";
        $noPrimo = true;
    }
}
if ($noPrimo == false) {
    echo "El número $num es primo";
}
