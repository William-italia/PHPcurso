<?php

$arr = [
    'Matheus' => 29,
    'Pedro' => 18,
    'Joaquim' => 14,
    'Maria' => 12
];


asort($arr); // ordem crescente
print_r($arr);

echo "<br>";

arsort($arr); // ordem decrescente
print_r($arr);

echo "<br>";

ksort($arr); // ordem crescente pelas chaves
print_r($arr);

echo "<br>";

krsort($arr); // ordem decrescente pelas chaves
print_r($arr);

?>