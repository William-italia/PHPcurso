<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "section6";

$conn = new mysqli($host, $user, $pass, $db);

$id = 17;

$stmt = $conn->prepare("SELECT * FROM professores WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$professor = $result->fetch_row();

print_r($professor);

$conn->close();
?>