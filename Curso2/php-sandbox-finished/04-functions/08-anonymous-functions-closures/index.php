<?php

// Anonymous function
$square = function ($number) {
  return $number * $number;
};

$result = $square(5);

echo "The square of 5 is: " . $result;

echo '<br>';

// Closures and outer scope access
function createCounter()
{
  $count = 0;

  // Define a closure that captures the $count variable
  $counter = function () use (&$count) {
    return ++$count;
  };

  return $counter;
}

// Create a counter function
$counter = createCounter();

// Use the counter function to increment and display the count
echo $counter() . "<br>"; // Output: 1
echo $counter() . "<br>"; // Output: 2
echo $counter() . "<br>"; // Output: 3
