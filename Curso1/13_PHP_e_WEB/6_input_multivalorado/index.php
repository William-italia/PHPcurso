<?php

if(isset($_POST['ingredientes'])) {

    $ingredientes = $_POST['ingredientes'];

    print_r($ingredientes);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
    <div>
        <input type="checkbox" name="ingredientes[]" value="TOMATE"> TOMATE
    </div>
    <div>
        <input type="checkbox" name="ingredientes[]" value="CEBOLA"> CEBOLA
    </div>
    <div>
        <input type="checkbox" name="ingredientes[]" value="BATATA"> BATATA
    </div>
    <div>
        <input type="checkbox" name="ingredientes[]" value="CENOURA"> CENOURA
    </div>
    <div>
        <input type="checkbox" name="ingredientes[]" value="MANDIOCA"> MANDIOCA
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
    </form>
</body>
</html>