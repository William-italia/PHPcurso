<?php

// Global Scope
$name = 'Alice <br>';

function sayHello()
{
  // Local Scope
  global $name; // We can use the global keyword to access a global variable inside a function
  $name = 'Bob'; // Changing the value will only affect the local scope
  echo 'Hello ' . $name;
  echo '<br>';
}

sayHello();

echo $name;

function sayGoodbye()
{
  $names = ['John', 'Brad', 'Alice'];
  echo 'Goodbye ' . $names[1];
  echo '<br>';
}

sayGoodbye();

echo $name[0]; // This will throw an error because $names is not defined in the global scope
