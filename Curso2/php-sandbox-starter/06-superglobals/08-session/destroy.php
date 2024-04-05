<?php
session_start();

unset($_SESSION['name']);

session_destroy();


echo 'session destroy';
?>