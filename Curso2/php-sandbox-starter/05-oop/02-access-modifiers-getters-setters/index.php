<?php
  class User {
    public $name;
    public $age;

    // Runs when an object is created
    public function __construct($name, $age) {
      echo 'Class: ' .  __CLASS__ . ' instantiated <br>';
      $this->name = $name;
      $this->age = $age;
    }

    public function sayHello() {
      return $this->name . ' Says Hello';
    }

    // called when no other references to a a certain object
    // used for cleanup, closing connections, etc
    public function __destruct() {
      echo '<br> destructor ran';
    }
  }

  // $user1->name = 'william';

  $user1 = new User('william', 20);
  echo $user1->name . ' is ' . $user1->age . ' years old';
  echo '<br>';
  echo $user1->sayHello();
  
  
  echo '<br>';

  $user1 = new User('william', 20);
  echo $user1->name . ' is ' . $user1->age . ' years old';
  echo '<br>';
  echo $user1->sayHello();
  