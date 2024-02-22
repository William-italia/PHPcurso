<?php

$numeros = array();


function filtro($array) {
    $result = array();

    foreach($array as $valor) {
        if($valor > 7) {
            $result[] = $valor;
        }
    }

    return $result;

}

function imprimrComVirgulas($numeros) {
    $contador = 0;
    $total = count($numeros);

    foreach($numeros as $num) {
        $contador++;

        if($contador < $total - 1) {
            echo "$num, ";
        } else if ($contador == $total -1) {
            echo "$num e ";
        } else {
            echo "$num.";
        }
    }
}

for($i = 1; $i <= 30; $i++) {
    $numeros[] = $i;
}

$numerosMaioresQue7 = filtro($numeros);

imprimrComVirgulas($numeros);
echo "<br>";
echo "<br>";
imprimrComVirgulas($numerosMaioresQue7);

?>