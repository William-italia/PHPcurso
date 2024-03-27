<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;


$result = $number1 + $number3;
$result = $number1 + $number1;
$result = $number2 . $number1;

$result = $number1 + $bool1;
$result = $number1 + $bool2;
$result = $number1 + $null;

$result = (string)$number1;
$result = (int)$number3;
$result = (bool)$number1;

var_dump($result);
// echo $result;
