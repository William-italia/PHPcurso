<?php

abstract class teste {

    public static function testandoClasse() {
        echo "esse metodo é de uma classe abstrata <br>";
    }

    abstract public function testeAbs();

}

teste::testandoClasse();


class Nova extends teste {

    public function testeAbs()
    {
        echo "teste metodo abstrato <br>";
    }

}

$n = new Nova;

$n->testeAbs();
?>