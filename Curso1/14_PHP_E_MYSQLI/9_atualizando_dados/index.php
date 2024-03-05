<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "section6";

$conn = new mysqli($host, $user, $pass, $db);

$id = 11;
$nome = "Marcelo";
$telefone = "13 2876-2385";


$stmt = $conn->prepare("UPDATE professores SET professor = ?, telefone = ? WHERE id = ?");

$stmt->bind_param("ssi", $nome, $telefone, $id);

$stmt->execute();

if($stmt->error) {
    echo "Erro: " . $stmt->error;
}





?>