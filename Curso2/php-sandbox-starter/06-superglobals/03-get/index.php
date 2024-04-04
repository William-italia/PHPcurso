<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John

// var_dump($_GET);

// setcookie('name', 'william', time() + 2 * 24 * 60 * 60);
// setcookie('curso', 'PHP', strtotime('+5days'));

// session_start();


// echo session_regenerate_id();
// require_once 'teste.php';

// echo session_id();

// $_SESSION['name'] = 'alexandre';
// $_SESSION['person'] = ['name' => 'william', 'email' => 'williamitalia70@outlook.com', 'age' => 20];

// var_dump($_GET);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="teste.php" method="GET">
        <label for="name">Search:</label>
        <input type="text" name="s" placeholder="Sua busca">
        <button type="type">Submit</button>
    </form>
</body>
</html>