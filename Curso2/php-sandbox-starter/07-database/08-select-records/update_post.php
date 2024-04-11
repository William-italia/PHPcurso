<?php

// require 'database.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) { // Verificar se o 'id' foi enviado no POST

//     $post_id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
//     $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
//     $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);

//     $fields = array('title' => $title, 'body' => $body);
//     $update = update('posts', $fields, ['id' => $post_id]); // Corrigido de ['id', $post_id] para ['id' => $post_id]

// }

require 'database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) { // Verificar se o 'id' foi enviado no POST

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);

    $fields = array('title' => $title, 'body' => $body);
    $update = update('posts', $fields, ['id', $id]); // Corrigido para ['id' => $post_id]

    if($update) {
        header('Location: index.php');
        exit;
    }


}