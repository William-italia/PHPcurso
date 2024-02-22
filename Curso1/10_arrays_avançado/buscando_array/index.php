<?php 

$arr = ['banana', 'maça', 'batata', 'pera', 'mamao'];

$b = "banana";

// if(in_array('batata', $arr)) {
//     echo "há o item batata no array <br>";
// } else {
//     echo "não há o item batata no array <br>";
// }

if(in_array($b, $arr)) {
    echo "há o item banana no array <br>";
} else {
    echo "não há o item banana no array <br>";
}

?>