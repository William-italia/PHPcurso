<?php

$x = 4;

while($x <= 30) {
    
    echo "$x <br>";

    if($x === 24) {
        echo "loop parado";
        break;
    }
    $x+=2;
}