<?php

$host = "localhost";
$db = "section6";
$user = "root";
$pass = "root";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("INSERT INTO produto (preco, descricao, id_tipo_produto) VALUES (:preco, :descricao, :id_tipo_produto)");

$preco = 1500.00; 
$descricao = "M53s 5g";
$id_tipo = 3;

$stmt->bindParam(":preco", $preco);
$stmt->bindParam(":descricao", $descricao);
$stmt->bindParam(":id_tipo_produto", $id_tipo);

$stmt->execute();

?>