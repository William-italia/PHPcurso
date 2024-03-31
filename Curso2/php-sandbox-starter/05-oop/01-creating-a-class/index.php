<?php

class User
{
    // properties (attributes)
    public $name;
    public $email;
    // method (functions)
    public function sayHello()
    {
        return $this->name . ' Says Hello';
    }
}

// instatiete a user object fro the user class
$user1 = new User();

$user1->name = 'William';
echo $user1->name;
echo '<br>';
echo $user1->sayHello();

echo '<br>';

$user2 = new User();

$user2->name = 'Vanessa';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();
