<?php

// class User
// {
//   protected $name;
//   protected $age;

//   public function __construct($name, $age)
//   {
//     $this->name = $name;
//     $this->age = $age;
//   }

  
// }


// class Custumer extends User {

//   private $balance;

//   public function __construct($name, $age, $balance)
//   {
//     parent::__construct($name, $age);
//     $this->balance = $balance;
//   }

//   public function pay($amount) {
//     return $this->name . ' paid $' . $amount;
//   }

//   public function getBalance() {
//     return $this->balance;
//   }


// }


// $custumer1 = new Custumer('william', 20, 900);

// echo $custumer1->login();
// echo $custumer1->pay(800);

// echo  $custumer1->getBalance();


class User
{
  // Properties
  private $name;
  private $email;
  protected $status = 'active';

  public function __construct($name, $email) {
    $this->name = $name;
    $this->email = $email;
  }

  public function login() {
    echo $this->name . ' logged in <br>';
  }

  public function getName() {
    return $this->name;
  }
  public function getEmail() {
    return $this->email;
  }

  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }

}


  class Admin extends User {
    public $level;

    public function __construct($name, $email, $level) {
      $this->level = $level;
      parent::__construct($name, $email);
    }

    public function login() {
      echo 'Admin ' . $this->getName() . ' logged in <br>';
    }
  }

  $admin1 = new Admin('Tom Smith', 'tom@gmail.com', 5);

  echo $admin1->getName() . '<br>';
  echo $admin1->getEmail() . '<br>';
  $admin1->setStatus('inativo');
  echo $admin1->getStatus() . '<br>';
  echo $admin1->level . '<br>';

  echo '<br>';
  $admin1->login();
  // var_dump($admin1);
