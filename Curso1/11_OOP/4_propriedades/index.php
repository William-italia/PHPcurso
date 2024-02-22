<?php
    class Carro {

        public $marca = "Ferrari";
        public $cor = "Vermelho"; 
        public $rodas = 4;
        public $aro = 20;

        function ligar() {
            echo "vruuuuumm <br>";
        }
    }

    $ferrari = new Carro;

    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas . "<br>";
    echo $ferrari->marca . "<br>";

    $ferrari->cor = "Azul";

    echo $ferrari->cor . "<br>";

    echo $ferrari->ligar();
?>