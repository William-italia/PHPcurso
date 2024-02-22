<?php

// function calcularDesconto($valor, $categoria) {
//     switch($categoria) {
//         case "eletronicos": 
//             $desconto = 0.10;            
//             break;
//         case "vestuarios": 
//             $desconto = 0.20;            
//             break;

//         case "alimentos": 
//             $desconto = 0.05;            
//             break;

//         default: 
//             $desconto = 0;
//     }

//     $valorFinal = $valor - ($valor * $desconto);

//     return $valorFinal;
// }

// $categoria = "vestuarios";
// $valor = 100;

// $valorComDesconto = calcularDesconto($valor, $categoria);

// echo "Valor original: $valor, Categoria: $categoria, Valor com desconto: $valorComDesconto";



// function calcularDesconto($valorDoProduto, $categoria) {
//     $desconto = 0;

//     if($categoria == "eletronicos") {
//         $desconto = 0.10;
//     } 
//     else if($categoria == "vestuarios") {
//         $desconto = 0.20;
//     } 
//     else if($categoria == "alimentos") {
//         $desconto = 0.05;
//     } else {
//         echo "Categoria invalida, Nenhum desconto aplicado! <br>";
//         return null;
//     }

   

//     return  $valorDoProduto - ($valorDoProduto * $desconto);
// } 

// $valor = 100;
// $categoria = "vestuario";

// $valorComDesconto = calcularDesconto($valor, $categoria);

// if($valorComDesconto !== null) {
//     echo "Valor original: $valor, Categoria: $categoria, Valor com desconto: $valorComDesconto";
// }

function calcularDesconto($valor, $categoria) {

    $categoriasValidas = array("eletronicos", "vestuarios", "alimentos");


    $desconto = array(
        "eletronicos" => 0.10,
        "vestuarios" => 0.20,
        "alimentos" => 0.05
    );

    if(in_array($categoria, $categoriasValidas)) {
        $desconto = $desconto[$categoria];
        $valorFinal = $valor - ($valor * $desconto);
        return $valorFinal;
    } else {
        echo "Categoria invalida, nenhum desconto aplicado!";
        return null;
    }
}

$valor = 100;
$categoria = "vestuarios";

$valorComDesconto = calcularDesconto($valor, $categoria);

if($valorComDesconto !== null) {
    echo "Valor original: $valor, Categoria: $categoria, Valor com desconto: $valorComDesconto";
}


