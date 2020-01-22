<?php

$numbers = [32, 89, 6, 7 ,34, 84, 46];

$smallNumber = $numbers[0];

for ($i=1; $i < sizeof($numbers); $i++) { 
    if($numbers[$i] < $smallNumber)
    {
        $smallNumber = $numbers[$i];
    }   
}

echo $smallNumber;

?>