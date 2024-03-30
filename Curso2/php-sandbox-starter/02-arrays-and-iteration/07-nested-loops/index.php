<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nested Loops & CSS Grid Example</title>
  <style>
    .grid-container {
      display: grid;
      grid-template-columns: repeat(5, 50px);
      grid-gap: 5px;
      /* Create 5 columns, each 50px wide */
      /* Add some spacing between grid items */
    }

    .grid-item {
      width: 50px;
      height: 50px;
      background-color: lightblue;
      text-align: center;
      line-height: 50px;
      border-radius: 10px;
      transition: all .5s ease;
      cursor: pointer;
    }

    .grid-item:hover {
      background: #000;
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="grid-container">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
      <?php for ($j = 1; $j <= 5; $j++) : ?>
        <div class="grid-item">
          <?= $i . ' - ' . $j ?>
        </div>
      <?php endfor; ?>
    <?php endfor; ?>
  </div>
</body>

</html>