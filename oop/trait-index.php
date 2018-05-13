<?php

include 'traits/Car.php';

use VehicleTrait\Car;

$car = new Car('Michell');
$car -> move();
echo 'GPS pos: ' . $car->getPos();