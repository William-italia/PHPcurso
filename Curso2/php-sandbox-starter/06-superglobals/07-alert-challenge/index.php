<?php
$title = '';
$description = '';
$submitted = false;
$messages = []; // Inicialize a array de mensagens

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title'] ?? '');
    $description = htmlspecialchars($_POST['description'] ?? '');

    // Verifica se o título está vazio
    if (empty($title)) {
        $messages[] = ['text' => 'Title is required', 'color' => 'text-red-500'];
        $submitted = false;
      }
      
      // Verifica se a descrição está vazia
      if (empty($description)) {
        $messages[] = ['text' => 'Description is required', 'color' => 'text-red-500'];
        $submitted = false;
      }

    // Verifica se um arquivo foi enviado
    $file = $_FILES['logo'];
    if (!empty($file['name'] )) {
        if ($file['error'] === UPLOAD_ERR_OK) {
            // Specify where to upload
            $uploadDir = 'uploads/';

            // Verifica e cria o diretório, se necessário
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            // Cria o nome do arquivo
            $filename = uniqid() . '-' . $file['name'];

            // Verifica o tipo de arquivo
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'webp'];
            $fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

            // Verifica se a extensão do arquivo é permitida
            if (in_array($fileExtension, $allowedExtensions)) {
              if (!empty($title) && empty(!$description)) {
                // Move o arquivo carregado para o diretório de destino
                if (move_uploaded_file($file['tmp_name'], $uploadDir .  $filename)) {
                  $messages[] = ['text' => 'File uploaded successfully!', 'color' => 'text-green-500'];
                  $submitted = true;
              } else {
                  $messages[] = ['text' => 'File Upload Error', 'color' => 'text-red-500'];
              }
              }
                
            } else {
                $messages[] = ['text' => 'File must be an image', 'color' => 'text-red-500'];
            }
        }
    } else {
        // Se nenhum arquivo foi enviado
        $messages[] = ['text' => 'No image uploaded', 'color' => 'text-red-500'];
        $submitted = false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Job Listing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<div class="flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h1 class="text-2xl font-semibold mb-6">Create Job Listing</h1>
        <?php foreach($messages as $message) : ?>
            <p class="<?= $message['color']?> mb-2">
                <?= $message['text']?>
            </p>
        <?php endforeach;?>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium">Title</label>
                <input type="text" id="title" name="title" placeholder="Enter job title" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none" value="<?= $title ?>">
            </div>
            <div class="mb-6">
                <label for="description" class="block text-gray-700 font-medium">Description</label>
                <textarea id="description" name="description" placeholder="Enter job description" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"><?= $description ?></textarea>
            </div>
            <div class="mb-4">
                <label for="resume" class="block text-gray-700 font-medium">Logo</label>
                <input type="file" id="logo" name="logo" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
                    Create Listing
                </button>
                <a href="#" class="text-blue-500 hover:underline">Back to Listings</a>
            </div>
        </form>

        <!-- Display submitted data -->
        <?php if ($submitted) : ?>
            <div class="mt-6 p-4 border rounded bg-[#16161D] text-white rounded-xl">
                <h2 class="text-lg font-semibold">Submitted Job Listing:</h2>
                <p><strong>Title:</strong> <?= $title ?></p>
                <p><strong>Description:</strong> <?= $description ?></p>
                <img class="mt-2 rounded-xl" src="./<?= $uploadDir?><?= $filename?>" alt="">
            </div>
        <?php endif; ?>
    </div>
</div>
</body>
</html>