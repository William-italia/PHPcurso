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

class User {
    public function teste($name, $age) {
    return 'Olá meu nome é ' . $name . 'e tenho ' . $age . ' anos';
}

}

$user = new User;

echo call_user_func([$user, 'teste'], 'william', 20);
