<?php 

//     class User {
//         public $name;
//         public $age;
//         public static $minPassLength = 6;

//         public static function validatePass($pass) {
//             if(strlen($pass) >= self::$minPassLength) {
//                 return true;
//             } else {
//                 return false;
//             }
//         }
//     }

//     $password = 'hello';
//     if(user::validatePass($password)){
//         echo 'Password valid';
//     } else {
//         echo 'Password NOT valid';
//     }
// 

class MathUtility {
    public static $pi = 3.14 . '<br>';

    public static function add(...$nums) {
        return array_sum($nums);
    }
}

echo MathUtility::$pi;
echo MathUtility::add(1, 2, 3 ,4 ,5);

?>