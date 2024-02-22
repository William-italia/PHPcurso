<?php

$arr = [

    'nome' => 'William',
    'idade' => 20
];

// if(array_key_exists("sobrenome", $arr)) {
//     echo "A chave existe";
// } else {
//     echo "A chave não existe";
// }

if(isset($arr["idade"])) {
    echo "A chave existe";
} else {
    echo "A chave não existe";
}


?>