<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "section6";

$conn = new mysqli($host, $user, $pass, $db);

// $CriaTabela = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";
$DeletandoTabela = "DROP TABLE teste";

// $conn->query($CriaTabela);
$conn->query($DeletandoTabela);

$conn->close();
?>