<?php

class Car
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

echo 'Class Car';

$car1 = new Car('Michell');
$car2 = new Car('Raul');

$car1 -> move();
//$car1 -> setOwner('Martin');

$car2 -> move();
//$car2 -> setOwner('Michell');

echo 'Car 1 owner: ' . $car1 -> getOwner() . '<br/>';
echo 'Car 2 owner: ' . $car2 -> getOwner() . '<br/>';