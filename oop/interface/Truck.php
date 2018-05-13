<?php

namespace VehicleInterface;

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

    public static function getTotal(){
        return self::$count;
    }

    public function startEngine(){
        return 'Truck: Start engine';
    }
}

echo 'Class Truck<br/>';