<?php

    class Animal {

        public $nome;
        
        function escolherNome($nome) {
            $this->nome = $nome;
        }

        function latir() {
            return "Au AU Auuuuuu <br>";
        }

        function latirForte() {
            return strtoupper($this->latir());
        }
    }

    $mel = new Animal;
    
    $mel->escolherNome("Mel");
    echo "O nome da minha cachorrinha é $mel->nome <br>";

    echo $mel->latir();
    echo $mel->latirForte();

?>