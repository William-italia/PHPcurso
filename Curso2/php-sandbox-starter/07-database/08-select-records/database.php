<!-- database -->
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
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $pdo;

} catch(PDOException $e) {
    echo "Connection Feiled " . $e->getMessage();
}
}

function all($table) {
    $pdo = connect();

    $sql = "SELECT * FROM {$table}";
    $list = $pdo->query($sql);

    $list->execute();  
    
    return $list->fetchAll();
}

function delete($table, $field, $value) {
    $pdo = connect();

    $sql = "DELETE FROM {$table} WHERE {$field} = :{$field}";
    $delete = $pdo->prepare($sql);
    $delete->bindParam($field, $value);

    return $delete->execute();
}

function singlePost($table, $field, $value) {
    $pdo = connect();

    $sql = "SELECT * FROM {$table} WHERE {$field} = :{$field}";
    $post = $pdo->prepare($sql);

    $post->bindParam($field, $value);

    $post->execute();  
    
    return $post->fetch();
}
