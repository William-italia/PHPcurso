<?php

$numeros = array();

for($i = 10; $i <= 20; $i++) {

    $numeros[] = $i;
}

$j = 0;
while($j < count($numeros)) {

    if($numeros[$j] % 2 != 0) {
        echo $numeros[$j] . "impar <br>";
    }
    $j++;
}

print_r($numeros);

