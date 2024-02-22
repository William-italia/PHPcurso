<?php

    class pessoa {

        function falar() {
            echo "Olá pessoa";
        }

    }

    $pessoa = new pessoa();

    $pessoa->nome = "william";

    echo $pessoa->nome;

    echo "<br>";

    $pessoa->falar();
?>