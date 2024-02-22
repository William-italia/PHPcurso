<?php

function countVowels(string $str) {
    $vowelCount = 0;
    $str = strtolower($str);

    for($i = 0; $i < strlen($str); $i++) {

        $char = $str[$i];

        if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
            $vowelCount++;
        }
    
    }

    return $vowelCount;

}

$string = "aeiou";
$resultado = countVowels($string);  

echo "A quantidade de vogais na string \"$string\" é: $resultado";

?>