<?php

$arr1 = [1, 2, 3];
$arr2 = [2, 4, 6];

$diff1 = array_diff($arr1, $arr2);
$diff2 = array_diff($arr2, $arr1);

print_r($diff2);
echo "<br>";

?>