<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase
{
    private static $count = 0;
    private $type;

    public function __construct($owner, $type){
        $this -> type = $type;
        parent::__construct($owner);
        self::$count++;
    }

    public function move(){
        echo 'Truck ' . $this -> type . ': moving<br/>';
    }

    public static function getTotal(){
        return self::$count;
    }
}

echo 'Class Truck<br/>';