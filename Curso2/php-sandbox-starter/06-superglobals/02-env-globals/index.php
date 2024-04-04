<?php 
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('./');
// $dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']); DARIA PRA USAR CASO FOSSE UMA ESTRUTURA NORMAL DE PROJETO
$dotenv->load();

// <?= php __DIR__
// <?php var_dump($_SERVER)
var_dump($_ENV['ROOT'])
?>

<!DOCTYPE html>
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