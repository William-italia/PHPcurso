<?php

    $usuario = [
        'nome' => 'William',
        'idade' => 20,
        'profissao' => 'Programador',
    ];

    if($usuario) {
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];
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
    <form action="">
    <div>
        <input type="text" name="name" placeholder="Digite seu nome: " value="<?= $nome?>">
    </div>
    <div>
        <input type="text" name="name" placeholder="Digite sua idade: " value="<?= $idade?>">
    </div>
    <div>
        <input type="text" name="name" placeholder="Digite sua profissao: " value="<?= $profissao?>">
    </div>
    <div>
        <input type="submit" value="enviar" >
    </div>
    </form>
</body>
</html>