<?php

$a = 10;

while ($a > 0) {

    if($a == 5 || $a == 7) {
        echo "pulou a execução de $a <br>";

        $a--;

        continue;
    }

    if($a == 2) {
        echo "terminando o loop com break $a <br>";
        break;
    }

    echo "$a <br>";

    $a--;
}