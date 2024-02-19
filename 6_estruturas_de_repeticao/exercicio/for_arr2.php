<?php

// $numeros = [];

// for($i = 1; $i <= 20; $i++) {

//     array_push($numeros, $i);
// }

// print_r($numeros);

$numeros = array();

for($i = 1; $i <= 20; $i++) {
    $numeros[] = $i;
    echo $numeros[$i - 1] . "<br>";
}

print_r($numeros);