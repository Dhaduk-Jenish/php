<?php

$number = 45;
$factor = [];

for ($i=2; $i < $number; $i++) { 
    if ($number % $i ==0) {
        array_push($factor , $i);
    }
}

echo 'Factor of ' .$number. ' is :' .implode(',',$factor);

?>