<?php

$num1 = 26;
$num2 = 65;
$num3 = 121;

compararNumeros($num1, $num2, $num3);

function compararNumeros($num1, $num2, $num3) {

    if($num1 == $num2 && $num1 == $num3) {
        echo "Os numeros são iguais";
    } else {
        $maiorNumero = $num1;

        if($num2 > $maiorNumero) {
            $maiorNumero = $num2;
        } 
        
        if ( $num3 > $maiorNumero) {
                $maiorNumero = $num3;
            }
            
        echo "$maiorNumero é o maior número entre $num1, $num2 e $num3";
      }

}