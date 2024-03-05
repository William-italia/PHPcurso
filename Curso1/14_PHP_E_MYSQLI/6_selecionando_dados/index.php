<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "section6";

$conn = new mysqli($host, $user, $pass, $db);

$q = "SELECT * FROM professores";

$result = $conn->query($q);

$conn->close();

// mostra apenas a primeira coluna da tabela
// $professores = $result->fetch_assoc();
// mostra todos os resultados
$professores = $result->fetch_all();

print_r($professores);
echo "<br>";

?>