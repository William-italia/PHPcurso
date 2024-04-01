<?php

class User
{
  protected $name;
  protected $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  
}


class Custumer extends User {

  private $balance;

  public function __construct($name, $age, $balance)
  {
    parent::__construct($name, $age);
    $this->balance = $balance;
  }


  public function pay($amount) {
    return $this->name . ' paid $' . $amount;
  }

  public function getBalance() {
    return $this->balance;
  }


}


$custumer1 = new Custumer('william', 20, 900);

// echo $custumer1->login();
// echo $custumer1->pay(800);

echo  $custumer1->getBalance();