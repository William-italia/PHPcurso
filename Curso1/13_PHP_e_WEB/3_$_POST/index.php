<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div class="box-input">
            <label for="marca">Marca do Veiculo:</label>
            <input type="text" id="marca" name="marca">
        </div>
        <div class="box-input">
            <label for="preco">preço do veiculo:</label>
            <input type="text" id="preco" name="preco">
        </div>
        <div class="box-input">
            <input type="checkbox" id="opcionais" name="opicionais[]" value="Teto Solar">
            <label for="opcionais">Teto solar:</label>
        </div>
        <div class="box-input">
            <input type="checkbox" id="opcionais" name="opicionais[]" value="Pelicula">
            <label for="opcionais">Pelicula:</label>
        </div>
        <div class="box-input">
            <input type="checkbox" id="opcionais" name="opicionais[]" value="Blindado">
            <label for="opcionais">Blindagem:</label>
        </div>
        <div class="box-input">
            <input type="submit" value="Enviar">
        </div>
    </form>    
</body>
</html>