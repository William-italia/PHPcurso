<?php

trait testando {

    public $y = 15;

    public function teste() {
        echo "testando trait <br>";
    }

}

Class central {

    use testando;

}


$will = new central;


$will->teste();
echo $will->y . "<br>";
?>