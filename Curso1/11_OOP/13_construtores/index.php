<?php

class Car {

    public $portas;
    public $cor;
    public $marca;


    function __construct($portas, $cor, $marca)
    {
        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }


    public function exibeCar() {
        echo "O carro é da marca $this->marca e tem a cor $this->cor <br>";
    }

}


$ferrari = new car(4, "vermelha", "Ferrari");
$bmw = new car(4, "Roxa", "bmw");

$bmw->exibeCar();
$ferrari->exibeCar();

?>