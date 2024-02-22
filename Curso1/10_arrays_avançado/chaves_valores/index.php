<?php

$carro = [
    "marca" => "bmw",
    "motor" => "2.4",
    "teto_solar" => true,
    "cambio" => "manual",
    "portas" => 4
];


$chaves = array_keys($carro);
print_r($chaves);

echo "<br>";
echo "<br>";
echo "<br>";

$valores = array_values($carro);
print_r($valores);
?>