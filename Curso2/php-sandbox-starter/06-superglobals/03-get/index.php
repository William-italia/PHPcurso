<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John

// var_dump($_GET);

setcookie('name', 'william', time() + 2 * 24 * 60 * 60);
setcookie('curso', 'PHP', strtotime('+5days'));

session_start();


echo session_regenerate_id();
require_once 'teste.php';

// echo session_id();

$_SESSION['name'] = 'alexandre';
$_SESSION['person'] = ['name' => 'william', 'email' => 'williamitalia70@outlook.com', 'age' => 20];