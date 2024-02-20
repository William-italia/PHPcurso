<?php

$str = "esta é a minha string";

$minha = substr($str, 10, 5); //string pai, inicio, e comprimento
echo $str . "<br>";
echo $minha . "<br>";;

$str2 = "testando esta string abc";



echo $str2 . "<br>";
$novaString = substr($str2, 8);  
echo $novaString . "<br>";
$novaString2 = substr($str2, 8, -3);
echo $novaString2 . "<br>";
?>