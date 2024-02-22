<?php

// $nomes = ["William", "Vanessa", "Livia", "Julia", "Marcelo"];

// $implode = implode(", ", $nomes);

// echo $implode;


$nomes = ["William", "Vanessa", "Livia", "Julia", "Marcelo"];


$nomes[count($nomes) - 1] = $nomes[count($nomes) - 1] . ".";

$implode = implode(", ", $nomes);

echo $implode;

// function implodeteste(array $nomes) {
//     $ultimoIndice = count($nomes) -1;

//     foreach($nomes as $indice => $nome) {
//         echo $nome;

//         if($indice < $ultimoIndice) {
//             echo ", ";
//         } else {
//             echo ".";
//         }
//     }
// }

// implodeteste($nomes);