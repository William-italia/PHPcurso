<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "section";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno) {
    echo "erro na conexão! <br>";
    echo "Erro: " . mysqli_connect_error();
    echo "Erro: " . $conn->connect_error;
}

?>