<?php
$validacoes = [];

if(count($_POST) > 0) {

    if(!$_POST['name']) {
            $validacoes[] = "Por favor, preencha o nome do usuário!";
    }

    if(!$_POST['email']) {
            $validacoes[] = "Por favor, preencha o campo email";
    }

    if(!$_POST['senha']) {
            $validacoes[] = "Por favor, preencha o campo senha";
    }  else if(strlen($_POST['senha']) < 5) {
            $validacoes[] = "Por favor preencha o campo senha com mais de 5 letras";
    }  else {
        if($_POST['confirmacao'] != $_POST['senha']) {
            $validacoes[] = "Os campos de senha devem ser iguais!";
        }
    }

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
    <?php if(count($validacoes)):?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
            <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif?>
    <form action="index.php" method="POST">
    <div>
        <input type="text" name="name" placeholder="Digite seu nome">
    </div>
    <div>
        <input type="email" name="email" placeholder="Digite seu Email">
    </div>
    <div>
        <input type="password" name="senha" placeholder="Digite sua senha">
    </div>
    <div>
        <input type="password" name="confirmacao" placeholder="Confirme sua senha">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
    </form>
</body>
</html>