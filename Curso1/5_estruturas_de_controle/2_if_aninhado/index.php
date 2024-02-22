<?php

$n = 60;

if(is_int($n)) {
    
    $mul = $n * 2;
    if($mul == 100) {
        echo "$n multiplicado por 2, é 100"; 
    } else if($mul > 100) {
        echo "$n multiplicado por 2, é maior que 100";
    } else {
        echo "$n Não é maior que 100";
    }


} else {
    echo "Não é um numero";
}