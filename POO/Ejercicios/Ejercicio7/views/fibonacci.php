<?php
$a = 0;
$b = 1;
$c = 0;
for ($i = 0; $i < 50; $i++) {
    $a + $b = $c;
    echo '$c';
    $b = $a;
    $c = $b;
}
