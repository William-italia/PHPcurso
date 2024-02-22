<?php

    class  Humano {
        
        public const OLHOS = 2;
        public const BRACOS = 2; 
        public const PERNAS = 2;

        function mostrarConstante() {
            echo self::BRACOS . "<BR>";
        }
    }

    $william = new Humano;

    $william->mostrarConstante();
    echo $william::OLHOS . "<BR>";


?>