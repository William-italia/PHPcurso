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
// session_destroy();


// echo (isset($_SESSION['name'])) ? 'Sessão existe ' . $_SESSION['name'] : 'Sessão não existe';
// echo '<br>';
// echo (isset($_SESSION['person'])) ? 'Sessão existe ' . implode(', ',$_SESSION['person']) : 'Sessão não existe';


if($_SERVER['REQUEST_METHOD'] === 'GET') {

    $search = filter_input(INPUT_GET, 's', FILTER_SANITIZE_STRING);

    var_dump($search);

    
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    // $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    // if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     echo 'Email valido';
    // } else {
    //     echo 'Email Invalido';
    // }

    // var_dump($name, $email);
    // var_dump($_POST);
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    
    </pre>
</body>
</html>
 -->
