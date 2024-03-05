<?php

$host = "localhost";
$db = "section6";
$user = "root";
$pass = "root";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("UPDATE produto SET descricao = :descricao WHERE id = 9"); 

$descricao = "Smartphone Samsung Galaxy M53 5G Azul 128GB, 8GB de RAM, Processador Octa-Core, Câmera Quádrupla, Selfie de 32MP, Tela Infinita de 6.7”";
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();

?>