<?php

    $arr = [5, "Matheus", true, false, "William", 12.3, "Felipe", true, [], "pedro", 5, 10, "joao"];

    $x = count($arr);
    $y = 0;

    while($y < $x) {
        
        if(is_int($arr[$y])) {
            echo $arr[$y] . "<br>";
        }
        $y++;
    }