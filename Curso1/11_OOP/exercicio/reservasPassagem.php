<?php

    class Passenger {

       private $name;
       private $age;
       private $seatNumber;
       
       public function __construct($name, $age, $seatNumber)
       {
            $this->name = $name;
            $this->age = $age;
            $this->seatNumber = $seatNumber;
       }

       public function getName() {
            return $this->name;
        }
        
        public function getAge() {
            return $this->age;
        }
        
        public function getSeatNumber() {
           return $this->seatNumber;
        }
        
        public function setSeatNumber($seatNumber) {
           return $this->seatNumber = $seatNumber;
       }

    }

    $passageiro = new Passenger("Jorge", "32", "G45");

    echo "DADOS PASSAGEIRO: <BR>";
    echo "Nome: ". $passageiro->getName() . ",<br>";
    echo "Idade: ". $passageiro->getAge() . ",<br>";
    echo "Assento: ". $passageiro->getSeatNumber() . ",<br>";

    $passageiro->setSeatNumber("g10");
    echo "Assento Atualizado: ". $passageiro->getSeatNumber() . ".<br>";

?>