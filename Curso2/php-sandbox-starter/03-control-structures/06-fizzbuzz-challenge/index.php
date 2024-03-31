<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz ' . $i;
        echo '<br>';
    } else if ($i % 3 === 0) {
        echo 'Fizz ' . $i;
        echo '<br>';
    } else if ($i % 5 === 0) {
        echo 'buzz ' . $i;
        echo '<br>';
    } else {
        echo $i;
        echo '<br>';
    }
}
