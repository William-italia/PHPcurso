<?php

    $pessoa = [
        'nome' => 'william',
        'idade' => 18,
        'profissao' => 'programador',
        'graduacao' => 'ADS'
    ];

    $nome = $pessoa['nome'];

    if($pessoa['idade'] >= 18) {
        echo "$nome é maior de idade";
    } else {
        echo "$nome é menor de idade";
    }