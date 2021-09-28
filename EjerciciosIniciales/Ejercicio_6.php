<?php
$a = 0;
$b = 1;
$suma;
echo "$a,$b";
for ($i = 1; $i <= 10; $i++) {
    echo ',', $a + $b;
    $suma = $a + $b;
    $a = $b;
    $b = $suma;
}
