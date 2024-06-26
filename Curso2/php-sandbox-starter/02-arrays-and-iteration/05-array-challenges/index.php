<?php


/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
$nums = range(1, 5, 1);

$total = 0;

for ($i = 0; $i < count($nums); $i++) {
  $total += $nums[$i];
}

$soma = 'A soma dos ' . count($nums) . ' números é: ' . $total;


/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

$colors = ['vermelho', 'azul', 'verde', 'amarelo'];

$colors = array_reverse($colors);
$colors = array_merge($colors, ['roxo', 'laranja']);
array_splice($colors, 1, 0, 'rosa');
array_pop($colors);



/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

$listings = [
  [
    'id' => 1,
    'job_title' => 'PHP Developer',
    'company' => 'ABC Company',
    'contact_email' => 'john@email.com',
    'contact_phone' => '123-456-7890',
    'skills' => ['PHP', 'MySQL', 'JavaScript']
  ],
  [
    'id' => 2,
    'job_title' => 'Web Designer',
    'company' => '123 Company',
    'contact_email' => 'jane@email.com',
    'contact_phone' => '555-456-7890',
    'skills' => ['PhotoShop', 'Illustrator', 'CSS']
  ],
  [
    'id' => 3,
    'job_title' => 'Web Developer',
    'company' => 'ABC Company',
    'contact_email' => 'john@email.com',
    'contact_phone' => '123-456-7890',
    'skills' => ['PHP', 'MySQL', 'JavaScript']
  ]
];

array_push($listings, [
  'id' => 4,
  'job_title' => 'Graphic Designer',
  'company' => '123 Company',
  'contact_email' => 'beth@email.com',
  'contact_phone' => '123-456-7890',
  'skills' => ['PhotoShop', 'Illustrator', 'CSS']
]);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Soma de um Array</h1>
  <p><?= $soma; ?></p>

  <h1>Array cores</h1>
  <ul>
    <?php foreach ($colors as $color) : ?>
      <li><?= $color ?></li>
    <?php endforeach; ?>
  </ul>
  <p>Minha cor favorita é: <strong><?= $colors[3] ?></strong></p>
  <pre><?php print_r($colors); ?></pre>


  <h1>Listagem de empregos</h1>
  <ul>
    <?php foreach ($listings as $job) : ?>
      <li>
        <p><strong><?= $job['job_title'] ?></strong> At <?= $job['company'] ?></p>
        <ul>
          <?php foreach ($job['skills'] as $skill) : ?>
            <li><?= $skill ?></li>
          <?php endforeach; ?>
        </ul>
      </li>



    <?php endforeach; ?>
  </ul>
  <pre>
    <?php print_r($listings) ?>
  </pre>
</body>

</html>