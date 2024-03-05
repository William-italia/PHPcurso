<?php

$host = "localhost";
$db = "section6";
$user = "root";
$pass = "root";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$id = 9;

$stmt = $conn->prepare("SELECT p.descricao as nome, p.preco, tp.descricao
FROM produto AS p 
JOIN tipo_produto AS tp
ON p.id_tipo_produto = tp.id");

$stmt->execute();

// $data = $stmt->fetch(PDO::FETCH_ASSOC);
// print_r($data);

echo "<br>";
echo "<br>";
echo "<br>";

$datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($datas);
?>