<?php

$color = 'white';
var_dump($color);
echo '<br/>';

/*
if($color == 'black'){
    echo 'Color is black';
}
elseif ($color == 'white'){
    echo 'Color is white';
}
else{
    echo 'Color is ...' . $color;
}
*/

switch($color){
    case 'black':
        echo 'Color is black';
    break;
    case 'white':
        echo 'Color is white';
    break;
    case 'blue':
        echo 'Color is blue';
    break;
    case 'red':
        echo 'Color is red';
    break;
    default:
        echo 'Color is ...' . $color;
    break;
}