<?php

declare(strict_types=1); // strict requirement

// Example 1
function getSum(int $a, int $b): int
{
  return $a + $b;
}

echo getSum(5, 10), '<br>';

// Example 2
function greeting(int $name): string
{
  return "O resultado é: " . $name;
}

// echo greeting("John");
echo greeting(getSum(2, 4));
echo '<br>';

// Void return
function greeting2(string $name = 'João'): void
{
  echo 'Hello ' . $name;
}

greeting2('pedro');



// https://www.php.net/manual/en/functions.arguments.php#functions.arguments.type-declaration