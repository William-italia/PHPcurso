<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "teste1";

$conn = new mysqli($host, $user, $pass, $db);

$q = "SELECT * FROM items";

$result = $conn->query($q);


if ($result->num_rows > 0) {
    // Exibir os resultados
    foreach ($result as $row) {
        echo "Nome: " . $row["nome"] . ", Preço: " . $row["preco"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

$conn->close();

// mostra apenas a primeira coluna da tabela
// $professores = $result->fetch_assoc();
// mostra todos os resultados
// $professores = $result->fetch_assoc();

// print_r($professores);
// echo $professores[1];
echo "<br>";
