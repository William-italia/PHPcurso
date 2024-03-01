<?php

if(isset($_COOKIE['nome']))

    $nome = $_COOKIE['nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if($nome != ""): ?>
<h1>Olá <?=$nome?>, está é a pagina 2</h1>
<?php endif; ?>

<a href="./index.php">voltar</a>
</body>
</html> 