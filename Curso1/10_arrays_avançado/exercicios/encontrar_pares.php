<?php

$numeros = range(1, 50);

function encontraPar($numeros) {

    $numerosPares = array();

    foreach($numeros AS $i => $valor) {
        if($valor % 2 == 0) {
            $numerosPares[] = $valor;
        }
    }

    return $numerosPares;
}

$numerosPares = encontraPar($numeros);


echo "Numeros pares: " . implode(', ', $numerosPares) . ".";

?>