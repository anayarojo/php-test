<?php

function hello($name) {
    echo 'Hello ' . $name;
    echo '<br/>';
}

function sum($a, $b){
    return $a + $b;
}

hello('Raul');
hello('Martin');

$c = sum(1, 2);
var_dump($c);