<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "section6";

$conn = new mysqli($host, $user, $pass, $db);



$sql = "INSERT INTO professores (professor, telefone, id_turma) VALUES ('joão', '13 99999999', '1'), ('mariene', '13 88888888', '0')";

$conn->query($sql);


$conn->close();
?>