<?php

interface Caracteristicas {

    const nome = "William";

    public function fala();

}

class Humano implements Caracteristicas {

    public $idade = 20;

    function fala() {
        echo "Olá mundo! <br>";
    }

    public function dizerNome() {
        echo "Meu nome é " . self::nome . "<br>";
    }


}

$will = new Humano;

$will->dizerNome();


?>