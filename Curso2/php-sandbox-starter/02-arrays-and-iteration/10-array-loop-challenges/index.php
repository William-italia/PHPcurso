<?php
$numbers = [1, 2, 3, 4, 5];

$students = [
  [
    'name' => 'John',
    'grades' => [85, 90, 92, 88]
  ],
  [
    'name' => 'Jane',
    'grades' => [95, 88, 91, 87]
  ],
  [
    'name' => 'Joe',
    'grades' => [75, 82, 79, 88]
  ]
];

$sum = 0;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  .card {
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100px;
    margin: 0 auto;
    background-color: #fff;
    margin-bottom: 1rem;
  }

  ul {
    list-style: none;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
  }
</style>
</head>

<body>
  <h3>Multiplication Table</h3>
  <ul>
    <?php for ($i = 1; $i <= 10; $i++) : ?>
      <div class="card">
        <?php for ($j = 1; $j <= 10; $j++) : ?>
          <li><?= $i ?> X <?= $j ?> = <?= $i * $j ?></li>
        <?php endfor; ?>
      </div>
    <?php endfor; ?>
  </ul>

  <h3>Array Sum</h3>
  <?php foreach ($numbers as $index => $num) : ?>
    <span><?= $num ?><?php if ($index < count($numbers) - 1) echo ',' ?> </span>
  <?php endforeach; ?>
  <li>A soma total desses numeros são: <?= array_sum($numbers) ?></li>
  <?php foreach ($numbers as $num) : ?>
    <?php $sum += $num ?>
  <?php endforeach; ?>
  <li><?= $sum ?></li>

  <h3>Average Grade</h3>
  <?php foreach ($students as $student) : ?>
    <li><?= $student['name'] ?> Media: <?= array_sum($student['grades']) / count($student['grades']) ?></li>
  <?php endforeach; ?>
</body>

</html>