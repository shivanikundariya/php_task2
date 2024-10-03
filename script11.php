
<?php

$number = 7;

function EvenOdd($number) 
{
    return ($number % 2 == 0) ? 'even' : 'odd';
}
$result = EvenOdd($number);
echo "The number " . $number . " is " . $result . ".";
?>
