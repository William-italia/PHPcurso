<?php

$nome = "william";
$sobrenome = "italia";
$idade = 20;
$cidade = "São-Paulo";

$pessoas = compact("nome", "sobrenome", "idade", "cidade");

foreach($pessoas as $pessoa => $value) {

    echo "$pessoa => $value <br>";

}


?>