<?php

    $pessoa = new class() {

    public $nome = "Matheus";

    public function talkName() {
        echo "Olá meu nome é $this->nome <br>";
    }

    };


    
    $pessoa->talkName();
    
    echo $pessoa->nome . "<br>";



?>