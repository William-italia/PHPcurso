<?php

require 'database.php';

$id = htmlspecialchars($_GET['id']);

$sql = 'DELETE FROM posts WHERE id = :id';

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':id', $id);

if($stmt->execute()) {
    header('Location: index.php');
    exit;
}

