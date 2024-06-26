<?php

function flash($key, $message, $type = "danger") {
    if(!isset($_SESSION['flash'][$key])) {
        $_SESSION['flash'][$key] = "<span class='alert-{$type} p-4 rounded-xl'>" . $message . "</span>";
    }
}

function getFlash($key) {

    if(isset($_SESSION['flash'][$key])) {

        $message = $_SESSION['flash'][$key];

        unset($_SESSION['flash'][$key]);

        return $message ?? '';
    }


}