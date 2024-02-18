<?php

$conta = 2 / 2.5;

if(is_float($conta)) {
    echo "$conta É float<br>";
}

$string = 2 . 4;

if(is_string($string)) {
    echo "$string É string<br>";
}

$nome = "william";
$sobrenome = "italia";

$nome_completo = $nome . ' ' . $sobrenome; // ponto serve para concatenacao

echo "$nome_completo <br>";