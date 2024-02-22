<?php


    class Cachorro {

        function latir() {
            echo "Au au au <br>";
        }

        function andar($m) {
            echo "O cachorro andou $m metros <br>";
        }
    }

    $mel = new Cachorro;
    $scooby = new Cachorro;

    $mel->latir();
    $mel->andar(10);