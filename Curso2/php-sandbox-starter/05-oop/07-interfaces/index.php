<?php

  interface ContentInterface {
    public function display();
    public function edit();
  }

  class Article implements ContentInterface {
    private $title;
    private $content;

    public function __construc($title, $content) {
      $this->title = $title;
      $this->content = $content;
    }

    public function display() {
      echo "<h2>{$this->title}</h2>";
      echo "<p>{$this->content}</p>";
    }

    public function edit() {
      echo "Editing the Article '{$this->title}'";
    }
  }

  class Video implements ContentInterface {
    private $title;
    private $url;

    public function __construc($title, $url) {
      $this->title = $title;
      $this->url = $url;
    }

    public function display() {
      echo "<h2>{$this->title}</h2>";
      echo "<iframe src='{$this->url}'></iframe>";
    }

    public function edit() {
      echo "Editing the video '{$this->title}'";
    }
  }

  $article = new Article();
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
    </div>
  </div>
</body>

</html>