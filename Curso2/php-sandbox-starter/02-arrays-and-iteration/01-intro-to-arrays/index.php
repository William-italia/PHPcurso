<?php


$names = array('william', 'vanessa', 'livia');
$numbers = range(1, 10, 1);

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
};

inspect($names);
inspect($numbers);
echo $names[1];
echo '<br>';
echo $names[2];

$numbers[3] = 8;

unset($numbers[3]);

$numbers = array_values($numbers);

inspect($numbers);
