<?php

    $numeros = range(10, 45);

    for($i = 0; $i < count($numeros); $i++) {

        $soma = $numeros[$i] + 6;

        if($soma > 30) {
            echo "O valor: $soma é muito alto <br>";
        } else {
            echo "$soma <br>";
        }
    }
?>