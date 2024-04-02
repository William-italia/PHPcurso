<?php

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

  public function setStatus($status) {
    $this->status = $status;
  }

  public function getStatus() {
    echo $this->status;
  }

}

$user1 = new User('william', 'william@gmail.com');

$user1->login();

$user1->setStatus('Inactive');
$user1->getStatus();
