<?php


// function teste($name) {
//     return 'Olá meu nome é ' . $name;
// }


// function teste2($callback) 
// {

//     if(is_callable($callback)) {
//         return $callback('alexandre');
//     } else {
//         echo 'Não é callback';
//     }
// }

// $user = 'teste';
// echo teste2($user);
// 

// function teste($name, $age) {
//     return 'Olá meu nome é ' . $name . 'e tenho ' . $age . ' anos';
// }

// echo call_user_func('teste', 'william', 20);

// class User {
//     public static function teste($name, $age) {
//     return 'Olá meu nome é ' . $name . 'e tenho ' . $age . ' anos';
// }

// }

// // $user = new User;

// echo call_user_func(['user', 'teste'], 'william', 20);


// function teste($name) {
//     return 'Olá meu nome é ' . $name;
// }


// function teste2($callback, $name) 
// {
//     return call_user_func($callback, $name);
// }

// echo teste2('teste', 'william');

// class User {
//     public function __invoke() {
//         return 'teste';
//     }
// }

// $user = new User;


// function teste($callback) {
//     return $callback();
// }

// echo teste($user);


// function teste($name, $age) {
//     return 'Olá meu nome é ' . $name . ' e tenho ' . $age . ' anos';
// }

// echo call_user_func_array('teste', ['william', 20]);

// $user = function($name) {
//     return 'teste ' . $name;
// };

// function teste($callback, $name) {
//     return $callback($name);
//     // return call_user_func($callback, $name);
//     // return call_user_func_array($callback, [$name]);
// }

// echo teste($user, 'william');

// $name = 'william';

// if(!isset($name)){
//     echo 'variavel inexistente';
// } else {
//     echo 'variavel: ' . $name . ', existe';
// }

$person = ['name' => 'William', 'age' => 20];

// echo isset($person['name']);

if(isset($person['name'])) {
    echo $person['name'];
} else {
    echo 'Chave não existe';
}