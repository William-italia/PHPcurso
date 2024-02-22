<?php

    class Pessoa {

        public $nome;
        public $idade;

        function andar($m){
            echo "A pessoa andou $m metros <br>";
        }


    }

    $william = new Pessoa;

    $william->nome = "William";
    $william->idade = 20;

    echo "O nome dele é $william->nome e ele tem $william->idade anos <br>";

    $william->andar(40);
?>