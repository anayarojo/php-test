<?php

namespace VehicleAbstract;

require_once 'VehicleBase.php';

class Car extends VehicleBase
{
    public function startEngine(){
        return 'Car: Start engine';
    }
}

echo 'Class Car<br/>';