<?php

$frase = "testando o explode";

$fraseArray = explode(" ", $frase);

print_r($fraseArray);
echo "<br>";

$fraseArray2 = explode(",", $frase);

print_r($fraseArray2);
echo "<br>";

$fraseb = "Carro, Avião, Barco, Navio, Jato";

$veiculorArray = explode(",", $fraseb);
print_r($veiculorArray);
echo "<br>";

for($i =0; $i < count($veiculorArray); $i++) {
    echo "item: ". $veiculorArray[$i] ."<br>";
}

?>