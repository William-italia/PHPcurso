<?php

$numeros = range(1, 30);

sort($numeros); //menor para maior funciona para numeros e letras
rsort($numeros); //maior para menor

print_r($numeros);

echo "<br>";
echo "<br>";
echo "<br>";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>teste</h1>
    <p><?= print_r($numeros)?></p>
</body>
</html>