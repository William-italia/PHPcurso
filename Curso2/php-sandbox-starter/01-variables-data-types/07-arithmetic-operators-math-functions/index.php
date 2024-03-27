<?php
$output = abs(-4.7);
$output = rand(1, 10);

$sites = [
  "PHP",
  "JavaScript",
  "Python",
  "HTML",
  "CSS",
  "Java",
  "C++",
  "C#",
  "Ruby",
  "Go"
];

$urls = [
  "https://en.wikipedia.org/wiki/PHP",
  "https://en.wikipedia.org/wiki/JavaScript",
  "https://en.wikipedia.org/wiki/Python",
  "https://en.wikipedia.org/wiki/HTML",
  "https://en.wikipedia.org/wiki/CSS",
  "https://en.wikipedia.org/wiki/Java_(programming_language)",
  "https://en.wikipedia.org/wiki/C%2B%2B",
  "https://en.wikipedia.org/wiki/C_Sharp_(programming_language)",
  "https://en.wikipedia.org/wiki/Ruby_(programming_language)",
  "https://en.wikipedia.org/wiki/Go_(programming_language)"
];
// shuffle($urls); embaralha o array

?>
<!DOCTYPE html>
<html lang="en">
<style>
  ul {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }

  .RED {
    color: red;
  }
</style>

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
      <ul>
        <?php foreach ($sites as $key => $site) : ?>
          <li class="RED"><a href="<?= $urls[$key] ?>"><?= $site; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</body>

</html>