<?php

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    $marcos = new Humano;
    $tuca = new Animal;
    $junior = new Professor;

    if($marcos instanceof Humano) {
        echo "Marcos é um humano <br>";
    } else {
        echo "Marcos não é um humano <br>";
    }


    if($tuca instanceof Humano) {
        echo "tuca é um humano <br>";
    } else {
        echo "tuca não é um humano <br>";
    }

    if($junior instanceof Humano ) {
        echo "Junior é humano<br>";
    } else {
        echo "Junior não é humano<br>";
    }
    if($junior instanceof Professor) {
        echo "Junior é professor<br>";
    } else {
        echo "Junior não é professor<br>";
    }

    if($junior instanceof Professor && $junior instanceof Humano) {
        echo "Junior é professor e humano<br>";
    } else {
        echo "Junior não é professor nem humano<br>";
    }