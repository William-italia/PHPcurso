<?php
$output = null;
$string = 'Hello World!, this is my World';

$output = strlen(str_replace(' ', '', $string)); // conta os caracteres e remove os espações em branco
$output = str_word_count($string); // conta as palavras
$output = strpos($string, 'World'); // descobre qual o indice da primeira letra da palavra que a gente buscou dentro da string
$output = $string[4];
$output = substr($string, 0, 5);
$output = $string;

$position = strpos($string, 'World!');
$output = str_replace('World', 'Universe', $string);

$output = $position;

if ($position !== false) {
  $part1 = substr($string, 0, $position);
  $part2 = substr($string, $position + strlen('World'));
  $World = substr($string, $position, strlen('World'));
  $output = $World;

  // $output = $part1 . 'Universe' . $part2;
  // $output = $part1 . str_replace('World', 'Universe', substr($string, $position, strlen('World'))) . $part2;
  $output = strtolower($part1 . str_replace('World', 'Universe', $World) . $part2);
  $output = strtoupper($part1 . str_replace('World', 'Universe', $World) . $part2);
}

$output = ucwords($string); // Deixa todas as palavras com a primeira letra -- capitalize
// $output = str_replace('World', 'Universe', $string);
$output = trim('   Hello World    ');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-2xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>