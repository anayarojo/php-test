<?php

$var2 = 1;
$numbers = [1,2,3,4,5];

$var = function (){
    echo 'This is a closure';
};

$var = function () use ($var2){
    echo 'This is a closure';
    echo 'Value: ' . $var2;
};

$var();

$result = array_map(function ($n){
    return $n * 2;
}, $numbers);

var_dump($result);

