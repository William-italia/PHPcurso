<?php

$arr = range(1, 30, 3);

function soma($a, $b) {
    return $a + $b;
}

$resultado = array_reduce($arr, "soma");

echo "$resultado <br>";

?>