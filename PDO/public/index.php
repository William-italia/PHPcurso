<?php

require "../bootstrap.php";


$routes = [
    '/phpcurso/PDO/public/' => 'controllers/index.php',
    // 'user/edit' => 'controllers/user_edit.php',
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if(!array_key_exists($uri, $routes)) {
    throw new \Exception("Rota Inexistente! {$uri}");
}
