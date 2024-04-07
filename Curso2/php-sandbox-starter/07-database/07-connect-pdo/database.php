<?php



function connect() {
    $host = 'localhost';
    $port = 'localhost';
    $dbName = 'blog';
    $user = 'root';
    $pw = 'root';

try {
    $pdo = new \PDO("mysql:{$host};port={$port};dbname={$dbName};charset=utf8", $user, $pw);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database Connected..";
} catch(PDOException $e) {
    echo "Connection Feiled " . $e->getMessage();
}
}

connect();