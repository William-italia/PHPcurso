<?php

function sumDigits(int $num) {
    $soma = 0;

    $numStr = (string) abs($num);

    for($i = 0; $i < strlen($numStr); $i++){
        $soma += $numStr[$i];
    }

    return $soma;
}

$num = 4141;
$resultado = sumDigits($num);
echo "A soma dos dígitos de $num é: $resultado";