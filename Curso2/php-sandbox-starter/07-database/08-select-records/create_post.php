<?php 

require 'database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    
    $title = htmlspecialchars($_POST['title'] ?? '');
    $body = htmlspecialchars($_POST['body'] ?? '');
  
    if($_POST['title'] != '' && $_POST['body'] != '') {
      
    $fields = [
      'title' => $title,
      'body' => $body
    ];
    
    $inserindo = create('posts', $fields);
    header('Location: index.php');
    exit;
    } else {
      header('Location: create.php');
    }

}