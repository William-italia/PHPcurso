<?php

    session_start();

   // print_r($_SESSION);

   $_SESSION['nome'] = "William";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Session!</h1>
    <a href="./pagina.php">pagina 2</a>
</body>
</html>