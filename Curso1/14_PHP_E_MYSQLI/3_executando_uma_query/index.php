<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "section6";

$conn = new mysqli($host, $user, $pass, $db);



$sql = "SELECT * FROM professores";

$result = $conn->query($sql);

print_r($result);

$conn->close();
?>