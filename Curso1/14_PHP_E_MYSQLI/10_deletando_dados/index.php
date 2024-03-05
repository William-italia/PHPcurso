<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "section6";

$conn = new mysqli($host, $user, $pass, $db);

$id = 10;

$stmt = $conn->prepare("DELETE FROM professores WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$stmt->close();


?>