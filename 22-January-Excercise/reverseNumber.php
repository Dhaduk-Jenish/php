<?php

$value = 1234567;
$number = $value;
$revNumber = 0;

while($number>1){
    $rem = $number % 10;  
    $revNumber = ($revNumber * 10) + $rem;  
    $number = ($number / 10); 
}
echo 'Number is : ' .$value;
echo '<br>Reverse number is : ' .$revNumber;
?>