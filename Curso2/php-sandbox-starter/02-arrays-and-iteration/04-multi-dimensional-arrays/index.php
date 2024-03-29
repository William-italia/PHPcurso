<?php
$output = null;

$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banana', 'Yellow'],
];

$output = $fruits[0][1];
$output = $fruits[1][0];

$users = [
  ['name' => 'John', 'email' => 'john@gmail.com', 'password' => 'secret1'],
  ['name' => 'Mary', 'email' => 'mary@gmail.com', 'password' => 'secret2'],
  ['name' => 'Jane', 'email' => 'jane@gmail.com', 'password' => 'secret3']
];

$users[] = ['name' => 'Alex', 'email' => 'alex@gmail.com', 'password' => 'secret'];
array_unshift($users, array_pop($users));

// $output = $users[0]['name'];
// array_push($users, array_shift($users));
$users[] = ['name' => 'Mike', 'email' => 'mike@gmail.com', 'password' => '12345'];


$output = count($users) . ' users in the array';

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
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>
      <p>
      <pre>
          <?php print_r($users) ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>