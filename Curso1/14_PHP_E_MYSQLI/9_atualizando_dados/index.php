<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "teste1";

$conn = new mysqli($host, $user, $pass, $db);

$id = 9;
$nome = "Prato";
$preco = 35.90;


// $stmt = $conn->prepare("UPDATE items SET nome = ?, preco = ? WHERE id = ?");
$stmt = $conn->prepare("SELECT * FROM items WHERE id = ?");

// $stmt->bind_param("sdi", $nome, $preco, $id);
$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$produto = $result->fetch_row();

if ($produto !== null) {
    echo 'Nome: ' . $produto[1] . ', Preço: ' . $produto[2] . '<br>';
} else {
    'Nenhum produto encontrado com o ID: ' . $id;
}

if ($stmt->error) {
    echo "Erro: " . $stmt->error;
}
