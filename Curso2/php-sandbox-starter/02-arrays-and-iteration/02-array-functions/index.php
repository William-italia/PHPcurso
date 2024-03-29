<?php
$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

function inspect($value)
{
    ob_start();
    echo '<pre>';
    var_dump($value);
    $output = ob_get_clean();
    echo '</pre>';

    return $output;
}


// $output = count($ids);

// sort
sort($ids);
//rsort
rsort($ids);
$output = inspect($ids);



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
            <p class="text-xl"><?= $output; ?></p>
            </p>
        </div>
    </div>
</body>

</html>