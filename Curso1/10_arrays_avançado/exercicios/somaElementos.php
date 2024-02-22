<?php

$numeros = range(5, 50, 5);

function somaElementos($numeros) {

    $soma = array_sum($numeros);

    echo "O valor da soma de todos os elementos do array é: $soma";

}

somaElementos($numeros);

// function somaElementos($numeros) {

//     $total = 0;

//     for($i = 0; $i < count($numeros); $i++) {
//         $total += $numeros[$i];
//     }

//     return $total;
// }

// function somaElementos($numeros) {

//     $total = 0;
    
//     foreach($numeros as $i => $numero) {
//         $total += $numeros[$i]; 
//     }


//     return $total;
// }



// function somaElementos($a, $b) {
//     return $a + $b;
// }

// $total = array_reduce($numeros, "somaElementos");

// echo "O total é: $total";


// function somaElementos($numeros) {

//     $i = 0;
//     $total = 0;

//     while($i < count($numeros)) {

//         $total += $numeros[$i];
//         $i++;

//     }

//     return $total;
// }


// $total = somaElementos($numeros);

// echo "O total é: $total";

?>