<?php

Class Pessoa {

    public $nome;
    public $idade;

    public function falar() {
        echo "Olá, eu sou $this->nome e tenho $this->idade anos! <br>";
    }

    private function gritar($obj) {
        echo "$obj É MUITO BOM! <BR>";
    }

    public function acessaGritar($obj = "PHP") {
        return $this->gritar($obj);
    }    

    protected function falarBaixo() {
        echo "lalala <br>";
    }

    public function acessaFalarBaixo() {
        return $this->falarBaixo();
    }
}


class Programador extends Pessoa {

    public function acessaFalarBaixoProgramador() {
        return $this->falarBaixo();
    }

}


$ze = new Pessoa;

$ze->nome = "ze";
$ze->idade = 78;

$ze->falar();
$ze->acessaFalarBaixo();
$ze->acessaGritar("PÃO");

echo "<br>";
echo "<br>";
echo "<br>";

$william = new Programador;

$william->nome = "william";
$william->idade = 20;

$william->falar();
$william->acessaGritar();
$william->acessaFalarBaixoProgramador();


?>