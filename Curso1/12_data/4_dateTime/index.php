<?php


$dataAtual = new DateTime();

print_r($dataAtual) . "<br>";

echo "<br>" . $dataAtual->format('d/m/Y') . "<br>";
echo "<br>" . $dataAtual->format('l . F . Y') . "<br>";

$dataAtual->modify('-5 year');

echo $dataAtual->format('d/m/y') . "<br>";

$data = new DateTime();

print_r($data);

$data->setDate(1999, 12, 01);
$data->setTime(10, 35, 33);

echo  "<br>" . $data->format('d/m/y') . "<br>";




//format
//modt
// setDate
//setTime
?>