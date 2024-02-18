<?php

$a = (int) "12";

echo $a;
echo "<br>";
echo $a+10;

echo "<br>";
if($a === 12) {
    echo "$a é int";
}

echo "<br>";
$b =  (double) "12.34";
// $b =  (float) "12.34";

if($b === 12.34) {
    echo "$b é double/float";
}

echo "<br>";
echo gettype($b);