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

function create($table, $fields) {
    if(!is_array($fields)) {
        $fields = (array) $fields;
    }

    $sql = "INSERT INTO {$table}";
    $sql .= "(" . implode(',', array_keys($fields)) . ")";
    $sql .= "VALUES (" . ":" . implode(',:', array_keys($fields)) . ")";


    $pdo = connect();

    $insert = $pdo->prepare($sql);
    
    return $insert->execute($fields);
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

// function update($table, $fields, $where) {

//     $pdo = connect();

//     $sql = "UPDATE {$table} SET ";

//     $setClauses = [];

//     foreach($fields as $field => $fieldValue) {
//         $setClauses[] = "{$field} = :{$fieldValue}";
//     }

//     $sql .= implode(', ', $setClauses);
//     $sql .= " WHERE {$where[0]} = :{$where[0]}";

//     $data = array_merge($fields, [$where[0] => $where[1]]);

//     $update = $pdo->prepare($sql);
//     $update->execute($data);

//     return $update->rowCount();
// }

function update($table, $fields, $where) {

    $pdo = connect();

    $fields['edited_at'] = date('Y-m-d H:i:s');

    $sql = "UPDATE {$table} SET ";

    $setClauses = [];

    foreach($fields as $field => $fieldValue) {
        $setClauses[] = "{$field} = :{$field}"; 
    }

    
    $sql .= implode(', ', $setClauses);
    $sql .= " WHERE {$where[0]} = :{$where[0]}"; 


    
    $update = $pdo->prepare($sql);

    $fields[$where[0]] = $where[1];

    $update->execute(array_merge($fields, [$where[0] => $where[1]])); 
    // $update->execute(array_merge($fields, ['id' => $where['id']])); 
    echo "SQL: " . $sql . "<br>";

    return $update->rowCount();

}