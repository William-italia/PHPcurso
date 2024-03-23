<?php

include_once("db.php");
include_once("dao/CarDAO.php");

$CarDAO = new CarDAO($conn);

$cars = $CarDAO->findAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Insira um carro:</h1>
    <form action="process.php" method="POST">
        <div>
            <label for="brand">Marca do veiculo:</label>
            <input type="text" name="brand" placeholder="Insira a marca aqui">
        </div>
        <div>
            <label for="km">Kilometragem:</label>
            <input type="text" name="km" placeholder="Insira a Kilometragem aqui">
        </div>
        <div>
            <label for="color">Cor do veiculo:</label>
            <input type="text" name="color" placeholder="Insira a cor aqui">
        </div>
        <button type="submit" value="Salvar">ENVIAR</button>
    </form>
    <ul>
        <?php foreach ($cars as $car) : ?>
            <li><?= $car->getBrand() ?> - <?= $car->getKm() ?> - <?= $car->getColor() ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>