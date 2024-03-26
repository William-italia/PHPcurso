<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "teste1";

$conn = new mysqli($host, $user, $pass, $db);

$id = 17;

$stmt = $conn->prepare("SELECT * FROM items WHERE id = ?");

$stmt->bind_param("i", $id);


$stmt->execute();

$result = $stmt->get_result();

$produto = $result->fetch_row();

print_r($produto);
echo '<br>';
echo 'Nome: ' . $produto[1] . ', Preço: ' . $produto[2] . '<br>';


$conn->close();
