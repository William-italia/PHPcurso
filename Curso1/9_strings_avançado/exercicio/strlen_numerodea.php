<?php

$str = "O rato roeu a roupa do rei de roma";

function filtro($str) {
    $countA = 0;
    $str = strtolower($str);

    for($i =0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if($char == 'a') {
            $countA++;
        }

    }

    return $countA;

}

$resultado = filtro($str);

echo "O número de A's na frase é de: $resultado";
?>