<?php

$objetos = [

"porta" => 100,
"maçaneta" => 80,
"motor" => 3000,
"placa de video" => 5000,
"retrovisor" => 85,

];

function filtro($arr) {

    $itensCaros = [];

    foreach($arr as $item => $preco) {

        if( $preco >= 1000) {
            // array_push($itensCaros, $item);
            $itensCaros[] = $item;
        }
    }

    return $itensCaros;
}

$itensFiltrados = filtro($objetos);
print_r($itensFiltrados);

// function filtro($arr) {
    
//     $itensCaros = [];


//     $keys = array_keys($arr);
//     $count = count($keys);

//     for($i = 0; $i < $count; $i++ ) {
//         $item = $keys[$i];  
//         $preco = $arr[$item];

//         if($preco >= 1000) {
//             $itensCaros[] = $item;
//         }
//     }

//     return $itensCaros;
// }

// $itensFiltrados = filtro($objetos);
// print_r($itensFiltrados);

?>