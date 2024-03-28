<?php
$output = null;

$output = date('Y-m-d h:i:s a');

$dia = date('d');
$mes = date('m');
$ano = date('Y', strtotime('2020-01-1'));
$hora = date('h');
$min = date('i');
$seconds = date('s');
$a = date('a');

$output = $dia . '/' . $mes . '/' . $ano . ' ' . $hora . ':' . $min . ':' . $seconds . ' ' . $a;
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
        </div>
    </div>
</body>

</html>