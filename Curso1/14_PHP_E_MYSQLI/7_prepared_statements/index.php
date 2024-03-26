<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "teste1";

$conn = new mysqli($host, $user, $pass, $db);

// $professor = "Felipe";
// $telefone = "13 9978-1224";
// $turma = 1;
// $id = 10;

$nome = "Caneca";
$preco = 50.00;

// $stmt = $conn->prepare("INSERT INTO professores (professor, telefone, id_turma) VALUES (?, ? ,?)");
// $stmt->bind_param("ssi", $professor, $telefone, $turma); // s -string, i = integer, d = double
// $stmt = $conn->prepare("SELECT * FROM professores WHERE id > ?");
// $stmt = $conn->prepare("INSERT INTO items(nome, preco) VALUES (?, ?)");s

$stmt = $conn->prepare("SELECT * FROM items");
// $stmt->bind_param("si", $nome, $preco); // s -string, i = integer, d = double

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all(MYSQLI_ASSOC);

// print_r($data);
foreach ($data as $row) {
    echo 'Nome: ' . $row['nome'] . ', Preço: ' . $row['preco'] . '<br>';
}
