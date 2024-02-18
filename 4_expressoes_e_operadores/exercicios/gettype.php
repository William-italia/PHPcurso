<?php

$operacao = "5" * 12;

echo gettype($operacao);

$carro = [
    'marca' => 'bmw',
    'motor' => '3.0',
    'velocidadeMax' => 300
];

echo "<br>";
print_r($carro);
echo "<br>";

$motor = $carro['motor'];
echo 
"O meu carro é da marca " . $carro['marca'] . " tem o motor "
. $motor . " e chega a " . $carro['velocidadeMax'] . " Km/h";
