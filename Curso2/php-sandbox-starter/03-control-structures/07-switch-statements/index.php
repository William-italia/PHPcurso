<?php

$dayOfWeek = date('l');
// $dayOfWeek = 1;

switch ($dayOfWeek) {
  case 'Monday':
    $message = 'Monday Blues!';
    $color = '#677ef0';
    break;
  case 'Tuesday':
    $message = 'At least it\'s not Monday!';
    $color = '#42f587';
    break;
  case 'Wednesday':
    $message = 'Hump day!';
    $color = '#fc6005';
    break;
  case 'Thursday':
    $message = 'One more day until Friday!';
    $color = '#fc0505';
    break;
  case 'Friday':
    $message = 'TGIF!';
    $color = '#8d05fc';
    break;
  case 'Saturday':
    $message = 'Have a nice weekend!';
    $color = '0, 87, 107';
    break;
  case 'Sunday':
    $message = 'Have a nice weekend!';
    $color = '#00b0c7';
    break;
  default:
    $message = 'Not a valid day.';
    $color = '167, 3, 255';
    break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What Day Is It?</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color:
        <?php if (substr($color, 0, 1) === '#') : ?> <?= $color ?> <?php else : ?> rgb(<?= $color ?>) <?php endif; ?>;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow-y: hidden;
    }
  </style>
</head>

<body>
  <h1><?= strtoupper($message) ?></h1>
</body>

</html>