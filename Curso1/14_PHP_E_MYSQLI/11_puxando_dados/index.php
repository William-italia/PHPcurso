<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "teste";

$conn = new mysqli($host, $user, $pass, $db);


// if($conn->connect_errno) {
//     echo "erro";
// } else {
//     echo "conexão feito com sucesso!";
// }

$stmt = $conn->prepare("SELECT * FROM items");

$stmt->execute();

$result = $stmt->get_result();

$items = $result->fetch_all();

foreach ($items as $item) {
    echo $item[1];
    echo " R$";
    echo $item[2];
    echo "<br>";
}

// print_r($items);

$stmt->close();

?>