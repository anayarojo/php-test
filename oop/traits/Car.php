<?php

namespace VehicleTrait;

require_once 'VehicleBase.php';
require_once 'GPSTrait.php';

class Car extends VehicleBase implements \Serializable
{

    use GPSTrait;

    public function startEngine(){
        return 'Car: Start engine';
    }

    public function serialize(){
        echo 'Serialize<br/>';
        return $this->owner;
    }

    public function unserialize($serialized){
        echo 'Unserialize<br/>';
        return $this->owner=$serialized;
    }
}

echo 'Class Car<br/>';