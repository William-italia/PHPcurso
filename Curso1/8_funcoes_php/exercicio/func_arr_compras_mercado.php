<?php

$listaSupermercado = array(
    "Arroz",
    "Feijão",
    "Macarrão",
    "Carne",
    "Frutas",
    "Legumes",
    "Pão",
    "Leite",
    "Ovos",
    "Azeite",
    "Sabonete",
    "Detergente",
    "Papel Higiênico"
);

function separaPorVirgula($compras) {
    $contador = 0;
    $total = count($compras);

    foreach($compras as $compra) {
        $contador++;

        if($contador == $total) {
            echo "$compra.d";
        } else if ($contador == $total -1) {
            echo "$compra e ";
        } else {
            echo "$compra, ";
        }

    }
    
}

separaPorVirgula($listaSupermercado);

?>