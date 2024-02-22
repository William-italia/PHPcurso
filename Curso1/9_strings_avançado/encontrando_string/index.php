<?php

$str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strpos($str, "strpos");
$testeEncontrar1 = strpos($str, "java");

// echo "$testeEncontrar <br>";

if(!$testeEncontrar1) {
    echo "Esta palavra não existe<br>";
} else {
    echo "$testeEncontrar <br>";
}

?>