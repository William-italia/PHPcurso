<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "section6";

$conn = new mysqli($host, $user, $pass, $db);

$professor = "Felipe";
$telefone = "13 9978-1224";
$turma = 1;
$id = 10;

// $stmt = $conn->prepare("INSERT INTO professores (professor, telefone, id_turma) VALUES (?, ? ,?)");
// $stmt->bind_param("ssi", $professor, $telefone, $turma); // s -string, i = integer, d = double

$stmt = $conn->prepare("SELECT * FROM professores WHERE id > ?");
$stmt->bind_param("i", $id); // s -string, i = integer, d = double

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

print_r($data);
?>