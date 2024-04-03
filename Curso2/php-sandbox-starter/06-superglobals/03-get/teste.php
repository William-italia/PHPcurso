<?php
// if(isset($_COOKIE['teste'])) {
    
//     echo $_COOKIE['teste'];
// } else {
//     echo 'Esse cookie não existe';
// }


// function teste($name) {
//     $person = function () use ($name) {
//         return $name;
//     };

//     return $person;
// }
// session_start();

// unset($_SESSION['name']); //deleta uma sessão especifica
// deleta todas as sessões 
session_destroy();


echo (isset($_SESSION['name'])) ? 'Sessão existe ' . $_SESSION['name'] : 'Sessão não existe';
echo '<br>';
echo (isset($_SESSION['person'])) ? 'Sessão existe ' . implode(', ',$_SESSION['person']) : 'Sessão não existe';



?>