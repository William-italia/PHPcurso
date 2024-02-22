<?php

$arr1 = [1, 2, 3, 4];
$arr2 = [10 , 20, 30, 40];
$arr3 = [2.1, 44.5, 12.54];
$arr4 = ["william", "vanessa", "livia", "juia", "isaque", "henrique"];

$arrMerge = array_merge($arr1 ,$arr2 ,$arr3, $arr4, ["nome" => "pedro", "idade" => 10], [5, 10, 15, 20]);

print_r($arrMerge);
echo "<br>";
echo "<br>";
?>