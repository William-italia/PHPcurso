<?php

    class Pessoa {

        function falar() {
            echo "Olá eu sou um objeto! <br>";
        }

        function somar($x, $y) {
            echo $x + $y . "<br>";
        }

    }


    $william = new Pessoa;
    
    $william->falar();
    $william->somar(10, 10);

    $pedro = new Pessoa;

    $pedro->somar(20, 25);
?>