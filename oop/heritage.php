<?php

class Vehicle
{
    private $owner = 'Raul';

    public function move(){
        echo 'moving<br/>';
    }

    public function __construct($owner){
        $this -> owner = $owner;
        echo 'construct<br/>';
    }

    public function __destruct(){
        echo 'destruct<br/>';
    }

    public function getOwner(){
        return $this -> owner;
    }

    public function setOwner($owner){
        $this -> owner = $owner;
    }
}

class Car extends Vehicle
{
    public function move(){
        echo 'Car: moving<br/>';
    }
}

class Truck extends Vehicle
{
    private $type;

    public function __construct($owner, $type){
        $this -> type = $type;
        parent::__construct($owner);
    }

    public function move(){
        echo 'Truck ' . $this -> type . ': moving<br/>';
    }
}

echo 'Class Car';
$car = new Car('Michell');
$car -> move();

echo 'Class Truck';
$truck = new Truck('Raul', 'Pickup');
$truck -> move();


echo 'Car owner: ' . $car -> getOwner() . '<br/>';
echo 'Truck owner: ' . $truck -> getOwner() . '<br/>';