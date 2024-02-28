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

class Dog {

    public $patas; 
    public $pelagem;
    public $nome;


    function __construct($patas, $pelagem, $nome)
    {
        $this->patas = $patas;        
        $this->pelagem = $pelagem;        
        $this->nome = $nome;        
    }


    public function showDog() {
        echo "O cachorro tem $this->patas, tem a pelagem $this->pelagem e se chama $this->nome";
    }

}

$mel = new Dog(4, "preta", "Mel");

$mel->showDog();


// $ferrari = new car(4, "vermelha", "Ferrari");
// $bmw = new car(4, "Roxa", "bmw");

// $bmw->exibeCar();
// $ferrari->exibeCar();




?>