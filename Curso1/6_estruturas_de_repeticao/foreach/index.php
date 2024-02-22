<?php

// $nomes = ["Matheus", "João", "Pedro", "Maria"];

// foreach($nomes as $nome) {
//     echo $nome . "<br>";
// }

$nome = "william";
$sobrenome = "italia";
$idade = 20;

$pessoas = compact("nome", "sobrenome", "idade");

foreach($pessoas as $pessoa => $valor) {
echo $pessoa .": ". $valor . "<br>";
}