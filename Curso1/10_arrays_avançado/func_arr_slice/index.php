<?php

$arr = range(2, 20, 2);

print_r($arr);
echo "<br>";
echo "<br>";
$slice1 = array_slice($arr, 2, 5);
print_r($slice1);
echo "<br>";
echo "<br>";
$slice2 = array_slice($arr, 4);
print_r($slice2);

?>