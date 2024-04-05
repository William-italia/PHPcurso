<?php

session_start();

$_SESSION['name'] = 'john';


// print_r($_SESSION);

if(isset($_SESSION['name'])) {
    echo 'Name: ' . $_SESSION['name'];
} else {
    echo 'Name is not set';
}