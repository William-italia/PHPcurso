<?php

/*
| Comparison Operators
| Operator | Description              |
| -------- | ------------------------ |
| ==       | Equal to                 |
| ===      | Identical to             |
| !=       | Not equal to             |
| <>       | Not equal to             |
| !==      | Not identical to         |
| <        | Less than                |
| >        | Greater than             |
| <=       | Less than or equal to    |
| >=       | Greater than or equal to |
*/


/*
| Logical Operators
| Operator | Description            |
| -------- | ---------------------- |
| and      | True if both are true  |
| &&       | True if both are true  |
| or       | True if either is true |
| ||       | True if either is true |
| xor      | True if one is true    |
| !        | True if it is not true |
*/


$a = 20;
$b = 20;
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
            <pre>
                <?php var_dump(!($a == $b)) ?>
                <?php var_dump($a !== $b) ?>
            </pre>
        </div>
    </div>
</body>

</html>