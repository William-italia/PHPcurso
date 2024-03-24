<?php

include_once("db.php");
include_once("dao/CarDAO.php");

$carDao = new CarDao($conn);

if (isset($_POST["id"])) {
    $carId = $_POST['id'];

    $carToDelete = new Car();
    $carToDelete->setId($carId);

    $carDao->delete($carToDelete);

    header("Location: index.php");
} else {
    $brand = $_POST["brand"];
    $km = $_POST["km"];
    $color = $_POST["color"];

    $newCar = new Car();

    $newCar->setBrand($brand);
    $newCar->setKm($km);
    $newCar->setColor($color);

    $carDao->create($newCar);

    header("Location: index.php");
}
