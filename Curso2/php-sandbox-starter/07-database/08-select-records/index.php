<!-- index.php -->
<?php 

require 'database.php';

// function formatarData($data) {
//   // Formata a data para o formato desejado (dia/mês/ano)
//   return date('d/m/Y', strtotime($data));
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Blog</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>

  <?php 
    $posts = all('posts');
    foreach($posts as $post): 
  ?>
  <div class="container mx-auto p-4 mt-4">
    <div class="md my-4">
      <div class="rounded-lg shadow-md">
        <div class="p-4">
          <h2 class="text-xl font-semibold"><a href="post.php?id=<?= $post->id?>"><?= $post->title?> / <?= date('d-m-Y', strtotime($post->created_at))?></a></h2>
          <p class="text-gray-700 text-lg mt-2"><?= $post->body?></p>
          <form action="" method="" class="relative p-6">
            <a href="delete_post.php?id=<?= $post->id?>" class="bg-blue-500 text-white py-2 px-4 absolute top-[10px] right-0 hover:bg-blue-400 transition-color duration-500">Deletar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach;?>
</body>

</html>