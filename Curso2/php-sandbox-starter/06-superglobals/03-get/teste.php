<?php

// if(isset($_COOKIE['teste'])) {
    
//     echo $_COOKIE['teste'];
// } else {
//     echo 'Esse cookie não existe';
// }


function teste($name) {
    $person = function () use ($name) {
        return $name;
    };

    return $person;
}




?>