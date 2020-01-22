<?php

$numbers = [32, 3, 5, 6, 8, 90 ,32];
$largeNumber = $second = $numbers[0];


for ($i=1; $i < sizeof($numbers); $i++) { 
    if($numbers[$i] > $largeNumber)
    {
        $second = $largeNumber;
        $largeNumber = $numbers[$i];
    }   
    else if ($second < $numbers[$i] && $largeNumber > $numbers[i]){
        $second = $numbers[$i];
    }
}

echo 'Largest number is : ' .$largeNumber;
echo '<br> Second Large is : ' .$second;


?>