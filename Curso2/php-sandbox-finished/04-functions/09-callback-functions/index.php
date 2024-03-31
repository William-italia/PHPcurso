<?php

$numbers = [1, 2, 3, 4, 5];
$numbers1 = range(10, 45, 5);

// Define a callback function to square a number
$square = function ($number) {
  return $number * $number;
};

// Use array_map() with the callback function to square each number
$squaredNumbers = array_map(function ($number) {
  return $number * $number;
}, $numbers);

$squaredNumber = function ($number) {
  return $number * $number;
};

print_r($squaredNumbers);

function squaredNumbers($number)
{
  return $number * $number;
}

$numbersMul = array_map('squaredNumbers', $numbers);

echo '<br>';
print_r($numbersMul);
echo '<br>';

echo '<br>';
echo 'apply callback function';
echo '<br>';
// Custom function that takes in a callback
function applyCallback($callback, $value)
{
  return $callback($value);
}


// Define a callback function to double a number
$double = function ($number) {
  return $number * 2;
};

// Use our custom function to apply the callback
foreach ($numbers1 as $number) {
  $result = applyCallback($squaredNumber, $number); // Result: 10
  echo '<br>';
  echo $result;
  echo '<br>';
}
