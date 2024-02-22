<?php

class Carro {

    public $marca;
    public $cor;
    public $placa;
    public $modelo;
    public $velocidade_max;

    function setVelocidade($velocidade) {
        $this->velocidade_max = $velocidade;
    }

    function getVelocidadeMaxima() {
        return "velocidade maxima é " . $this->velocidade_max . "Km/h. <br>";
    }
}

$bmw = new Carro;

$bmw->marca = "BMW";
$bmw->cor = "chumbo";
$bmw->placa = "BRA2E19";
$bmw->modelo = "x1";

$bmw->setVelocidade(300);

echo "O carro pertence a marca: $bmw->marca, é modelo $bmw->modelo, tem a cor $bmw->cor, a placa é $bmw->placa, e a " . $bmw->getVelocidadeMaxima();

echo "<br>";
echo "<br>";

$ferrari = new Carro;

$ferrari->marca = "Ferrari";
$ferrari->cor = "Vermelha";
$ferrari->placa = "DOK2A20";
$ferrari->modelo = "F8";

$ferrari->setVelocidade(350);

echo "O carro pertence a marca: $ferrari->marca, é modelo $ferrari->modelo, tem a cor $ferrari->cor, a placa é $ferrari->placa, e a " . $ferrari->getVelocidadeMaxima();


?>