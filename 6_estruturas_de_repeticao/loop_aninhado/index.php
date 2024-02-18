<?php

$i = 1;

while($i <= 10) {
    echo "loop externo $i <br>";

    $j = 1;
    while($j <= 5) {
        echo "loop interno $j <br>";
        $j++;
    }

    $i++;
}