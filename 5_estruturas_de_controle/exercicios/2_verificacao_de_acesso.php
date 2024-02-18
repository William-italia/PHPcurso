<?php

$autorizacao = true;
$idade = 20;

verificaAcesso($idade, $autorizacao);

function verificaAcesso(int $idade, bool $autorizacao) {


    if($idade >= 18) {

        if($autorizacao == true) {
            echo "Entrada permitida!";
        } else {
            echo "Entrada negada, autorizacao necessaria";
        }
        
    } else {
        echo "Entrada negada, idade abaixo do permitido!";
    }




}