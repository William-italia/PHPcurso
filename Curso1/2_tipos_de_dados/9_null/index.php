<?php


echo null;

$nome = null;

if(is_null($nome)) {
    echo "o Nome é nulo";
}
echo "<br>";

$nome = "pedro";
if(!is_null($nome)) {
    echo "o Nome é $nome";
}


?>