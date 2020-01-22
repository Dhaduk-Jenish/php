<?php

$year = 2020;

if ( ($year % 4) == 0) {
    if ($year % 100 == 0) {
        if ($year % 400 == 0) {
            echo $year .' is leap year';
        }
        else{
            echo $year .' is not leap year';
        }
    }
    else
        echo $year .' is leap year';
}
else
    echo $year .' is not leap year';


?>