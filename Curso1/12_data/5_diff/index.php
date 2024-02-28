<?php

$d1 = new DateTime(); 
$d2 = new DateTime(); 

$d1->setDate(2020, 11, 14);
$d2->setDate(2001, 10, 15);


$diferenca = $d1->diff($d2);

print_r($diferenca);
echo  "<br>";

echo $diferenca->format("%a days");

?>