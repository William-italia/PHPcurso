<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processamento.php" method="GET">
        <div class="box-input">
            <label for="name">Nome:</label>
            <input type="text" id="name" name="nome" placeholder="Cleyton">
        </div>
        <div class="box-input">
            <label for="idade">Idade:</label>
            <input type="text" id="idade" name="idade" placeholder="20">
        </div>
        <div class="box-input">
            <input type="submit" value="Enviar">
        </div>
    </form>    
</body>
</html>