<?php

    function nomeSobrenome(string $nome, string $sobrenome) {
        return $nome ." ".$sobrenome;
    }

    $nomeCompleto = nomeSobrenome("William", "Italia");

    echo $nomeCompleto;
?>