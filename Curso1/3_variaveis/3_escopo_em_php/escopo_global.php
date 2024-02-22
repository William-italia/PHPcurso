<?php

$teste = "asd";

echo "$teste global <br>";
if(5 > 2) {
    $teste = "dsa";

    echo "$teste if <br>";
}

echo "$teste global 2 <br>";

function funcao() {
    // $teste = "function";
    global $teste;
    $teste = 2;

    echo "$teste usando a tag 'global' antes da variavel <br>";
}

funcao();

echo "$teste global";