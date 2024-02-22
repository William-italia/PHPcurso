<?php

    $numeros = range(1000, 2000, 50);

    function ordenarNumeros($numeros) {
        $crescente = $numeros;
        rsort($crescente);
        return  $crescente;
    }

 $crescente = ordenarNumeros($numeros);

 print_r($crescente);

?>