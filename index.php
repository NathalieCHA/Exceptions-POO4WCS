<?php 

require_once 'Car.php';

$car = new Car;

$car->setParkBrake(false);
$car->start();

    try{
        $car->start();

    } catch (Exception $e) {
        $car->$this->setParkBrake()=== true;
    } finally {
        echo "Ma voiture roule comme un donut !";
    }
