<?php

namespace VehicleAbstract;

abstract class VehicleBase
{
    private $owner = 'Raul';

    public function move(){
        echo $this -> startEngine() . '<br/>';
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

    public abstract function startEngine();
}