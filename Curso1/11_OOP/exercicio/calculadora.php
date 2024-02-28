<?php

    class Calculadora {

        public $a;
        public $b;

        public function soma($a, $b) {
            $soma = $a + $b;
            echo "A soma de: $a + $b = $soma <br>";
        }
        
        public function subtrair($a, $b) {
            $sub = $a - $b;
            echo "A subtração de: $a - $b = $sub <br>";
        } 
        
        public function multiplicar($a, $b) {
            $mult = $a * $b;
            echo "A multiplicação de: $a * $b = $mult <br>";
        }
        
        public function divisao($a, $b) {
            $mult = $a * $b;
            echo "A multiplicação de: $a / $b = $mult <br>";
        }

    }

    $calc = new Calculadora;

    $calc->soma(10,10);
    $calc->subtrair(10,10);
    $calc->multiplicar(10,10);
    $calc->divisao(10,10);

?>