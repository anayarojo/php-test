<?php

include 'exceptions/ToyCar.php';

use VehicleException\ToyCar;

try
{
    $toycar = new ToyCar('Michell');
    $toycar -> move();
}
catch(Exception $e)
{
    echo 'This is a toy<br/>';
}
finally
{
    echo 'finally<br/>';
}


