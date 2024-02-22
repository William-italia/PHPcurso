<?php

$frutas = array(
    "Maçã", "Banana", "Morango", "Uva", "Pera",
    "Abacaxi", "Melancia", "Laranja", "Limão", "Manga",
    "Cereja", "Kiwi", "Framboesa", "Pêssego", "Melão",
    "Goiaba", "Pitaya", "Caju", "Açaí", "Coco",
    "Maracujá", "Amora", "Tangerina", "Grapefruit",
    "Abacate", "Ameixa", "Caqui", "Nectarina", "Jabuticaba",
    "Romã"
);

$frase = "O PHP é muito legal";

$arr = explode(" ", $frase);
$frase2 = implode(" ", $arr);

// $str = implode(", ", $frutas);
// $str2 = implode(" *-* ", $frutas);

// echo "$str <br>";
// echo "$str2 <br>";

print_r($arr);
echo "<br>";
echo "$frase2 <br>";

?>