<?php

$number1 = 19;
$number2 = 13;

echo 'Before Swapping numbers <br>' .$number1. ' & ' . $number2;

$number1 = $number1 + $number2;
$number2 = $number1 - $number2;
$number1 = $number1 - $number2;



echo '<br>After Swapping numbers <br>' .$number1. ' & ' . $number2;

?>