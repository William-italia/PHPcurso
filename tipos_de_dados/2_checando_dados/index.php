<?php

// is_float();
// is_int();
// is_dado();

$n = 2.1;
// $n = 2;


if(!is_int($n)) {
    echo "$n não é inteiro";
} else {
    echo "$n é inteiro";
}

$str = "joao";
echo "<br>";
if(is_string($str)) {
    echo "$str é string";
} else {
    echo "Não é string";
}
echo "<br>";

$a = true;

if(is_bool($a)) {
    echo "$a é booleano";
}
echo "<br>";

if(0 == false){
    echo "é considerado falso";
} else {
    echo "é considerado verdadeiro";
}

?>