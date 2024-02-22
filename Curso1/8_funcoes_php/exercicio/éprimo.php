<?php

function isPrime(int $num) {

    if($num < 2) {
        return false;
    }

    for($i = 2; $i < $num; $i++) {

        if($num % $i == 0) {
            return false; // o numero nao é primo
        } 
    }
    
    return true; // o numero é primo

}

$num = 13;

if(!isPrime($num)) {
    echo "o numero: $num, nao é primo";
} else {
    echo "o numero: $num, é primo";
}
?>