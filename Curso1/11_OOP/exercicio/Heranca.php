<?php

    class Humano {

        public $maos = 2; 
        public $pernas = 2;

        public function falar() {
            echo "Olá eu sou um humano <br>";
        }


    }


    class professor extends Humano {
        
        public $disciplina = "Matemática";

        public function estaLecionando() {
         echo "está dando aula de $this->disciplina <br>";
        }


    }


    $cleyton = new professor;

    // $cleyton->estaLecionando();

    echo "Cleyton tem $cleyton->maos maos e $cleyton->pernas pernas e ";
    $cleyton->estaLecionando();
    echo "Cleyton tem $cleyton->maos maos e $cleyton->pernas pernas e esta lecionado $cleyton->disciplina";
?>