<?php 

require 'database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    
    $title = htmlspecialchars($_POST['title'] ?? '');
    $body = htmlspecialchars($_POST['body'] ?? '');
  
    $fields = [
        'title' => $title,
        'body' => $body
      ];
    

    $inserindo = create('posts', $fields);
    header('Location: index.php');

}