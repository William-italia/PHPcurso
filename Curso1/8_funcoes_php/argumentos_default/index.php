<?php 

function teste($a = "teste") {
    echo "O valor de A é: $a <br>";
}

teste();
teste("asd");

function teste1($b, $a = "2") {
    echo "O valor de A é: $a e de b é: $b <br>";
}

teste1("1");
teste1("batata");
?>