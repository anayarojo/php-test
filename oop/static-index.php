<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

//use Vehicles\Car;
//use Vehicles\Truck;
use Vehicles\{Car, Truck};

$truck1 = new Truck('Michell', 'Pickup');
$truck1 -> move();
$truck2 = new Truck('Raul', 'Big');
$truck2 -> move();
$truck3 = new Truck('Martin', 'Small');
$truck3 -> move();
$truck4 = new Truck('Aaron', 'Toy');
$truck4 -> move();

//echo 'Total trucks: ' . Truck::$count . '<br/>';
echo 'Total trucks: ' . Truck::getTotal() . '<br/>';