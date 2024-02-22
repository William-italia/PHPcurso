<?php

//resgatar elementos e remover elementos de array

$arr = [1, 2, 3, 4, 5, 6];

$removidos = array_slice($arr, 1, 2);

print_r($arr);

echo "<br>";
echo "<br>";

print_r($removidos);

echo "<br>";
echo "<br>";

$removidos2 = array_slice($arr, 3);
print_r($removidos2);

echo "<br>";
echo "<br>";

$removidos3 = array_slice($arr, 1, -1);
print_r($removidos3);


?>