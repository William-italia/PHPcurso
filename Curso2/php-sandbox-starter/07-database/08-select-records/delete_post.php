<!-- delete_post -->

<?php

require 'database.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


$delete = delete('posts', 'id', $id);

if($delete) {
    return header('Location: index.php');
}
return header('Location: index.php');
