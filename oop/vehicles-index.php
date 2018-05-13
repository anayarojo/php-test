<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

//use Vehicles\Car;
//use Vehicles\Truck;
use Vehicles\{Car, Truck};

$truck = new Truck('Michell', 'Big');
$car = new Car('Raul');

$truck -> move();
//$car1 -> setOwner('Martin');

$car -> move();
//$car2 -> setOwner('Michell');

echo 'Truck owner: ' . $truck -> getOwner() . '<br/>';
echo 'Car owner: ' . $car -> getOwner() . '<br/>';