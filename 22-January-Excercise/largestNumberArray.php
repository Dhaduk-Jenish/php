<?php

$numbers = [34, 78, 9, 55, 90, -3, 0, 43];
$largeNumber = $numbers[0];

for ($i=1; $i < sizeof($numbers); $i++) { 
    if($numbers[$i] > $largeNumber)
    {
        $largeNumber = $numbers[$i];

    }   
}

echo $largeNumber;

?>