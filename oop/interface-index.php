<?php

include 'interface/Car.php';
include 'interface/Truck.php';

//use Vehicles\Car;
//use Vehicles\Truck;
use VehicleInterface\{Car, Truck};

$car = new Car('Michell');
$car -> move();

$ser = serialize($car);
$newCar = unserialize($ser);

echo 'New car owner: ' . $newCar -> getOwner() . '<br/>';