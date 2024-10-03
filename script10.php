<?php

$length = 5; 
$width = 5; 


function calculateArea($length, $width) 
{
    return $length + $width;
}
$area = calculateArea($length, $width);
echo "The rectangle area " . $area;
?>