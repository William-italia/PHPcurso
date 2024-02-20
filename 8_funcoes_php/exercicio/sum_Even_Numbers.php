<?php

function sumEvenNumbers(int $num) {

    $total = 0;
    for($i = 1; $i <= $num; $i++ ) {

        if($i % 2 == 0) {
            $total += $i;
        }

    }
    
    return $total;
}


$numero = 10;
$resultado = sumEvenNumbers($numero);

echo "A soma dos números pares de 1 até $numero é: $resultado";
// 2, 4, 6, 8, 10;