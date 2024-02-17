<?php

$ar = ['nome' => 'william', 'idade' => 20, 'altura' => 1.80];

echo $ar['nome'];
echo " ";
echo $ar['idade'];
echo " ";
echo $ar['altura'];


$carro = [
    'marca' => 'BMW',
    'rodas' => 4,
    'teto_solar' => 1,
    'velocidade_max' => 300,
    'blidado' => false
];

$marca = $carro['marca'];
$velocidade_max = $carro['velocidade_max'];

echo "<br>";
echo "O carro é da marca $marca e atinge uma velodidade de $velocidade_max Km/h";