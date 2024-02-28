<?php

    class Huumano {

        public $este;

        public function falar() {
            echo "Olá";
        }

    }

    $william = new Huumano;
    $teste = 10;

    if(is_object($william)) {
        echo "william é um objeto <br>";
    }

    if(!is_object($teste)) {
        echo "Teste, Não é um objeto <br>";
    }

    if(method_exists($william, 'falar')) {
        echo "O metodo \"falar\" existe";
    } else {
        echo "metodo nn existe";
    }


?>