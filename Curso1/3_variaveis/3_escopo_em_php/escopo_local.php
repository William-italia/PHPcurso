<?php

$x = 10;

echo "$x global <br>";

teste();

function teste() {
    $x = 5;

    echo "$x Local teste <br>";
}

function testando() {
    $x = 25;
    
    echo "$x local testando <br>";
}
$x = 95;

testando();
echo "$x global";