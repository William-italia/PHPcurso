<?php

function verificarCategoria($categoria) {
    switch($categoria) {
        case "eletronicos": 
            echo "Essa categoria é de produtos eletrônicos";           
            break;
        case "vestuarios": 
            echo "Essa categoria é de produtos de vestuário";           
            break;
                
        case "alimentos": 
            echo "Essa categoria é de produtos alimentícios";           
            break;

        default: 
            echo "Categoria desconhecida";
    }

}

$categoria = "eletronicos";

verificarCategoria($categoria);