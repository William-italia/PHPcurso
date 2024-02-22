<?php
//public, protected, private


 class Car {

    public $rodas = 4;
    private $vidro = "sem pelicula";
    protected $portas = 4;

    public function  getVidro() {
        return $this->vidro . "<br>";
    }

    public function getPortas() {
        return $this->portas . "<br>";
    }

 }

 class Mecanico {

    public function alterarRodas($carro) {
        $carro->rodas = 10;
    }
    public function colocarPelicula($carro, $pelicula) {
        $carro->vidro = "G20";
    }
 }

 $carro = new Car;
 $william = new Mecanico;

 echo $carro->rodas . "<br>";
 
 $william->alterarRodas($carro);
 echo $carro->rodas . "<br>";


//  echo  $carro->vidro . "<br>";

//  $william->colocarPelicula($carro, "G20");

//  echo  $carro->vidro . "<br>";


echo $carro->getVidro();
echo $carro->getPortas();


?>