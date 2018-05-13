<?php

namespace VehicleInterface;

require_once 'VehicleBase.php';

class Car extends VehicleBase implements \Serializable
{
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