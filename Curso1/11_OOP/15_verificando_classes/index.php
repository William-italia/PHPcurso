<?php

    class Humano {

        public $idade;
        public $nome;
        public $profissao;


        public function __construct($idade, $nome, $profissao)
        {
            $this->idade = $idade;
            $this->nome = $nome;
            $this->profissao = $profissao;
        }

        public function talk() {
            echo "Olá meu nome é $this->nome tenho $this->idade anos e trabalho com $this->profissao <br>";
        }
    }

    $william = new Humano(20, "William", "programação");

    $william->talk();


    if(class_exists("Humano")) {
        echo "A classe Humano, existe <br>";
    }
    
    if(!class_exists("Dog")) {
        echo "A classe Dog, não existe <br>";
    }


    print_r(get_class_vars("Humano"));
    echo "<br>";
    print_r(get_class_methods("Humano"));
?>