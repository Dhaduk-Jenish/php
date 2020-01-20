<?php

function demo()
{
    echo 'this is my first function in php<br>';
}

demo();

//function with arguments

function addition($number1 , $number2){
    return ($number1 + $number2);
}

function substraction($number1 , $number2){
    return ($number1 - $number2);
}

function multiply($number1 , $number2){
    return ($number1 * $number2);
}

function division($number1 , $number2){
    return ($number1 / $number2);
}

echo 'Addition :' .addition(15,5). '<br>Substraction : ' .substraction(15,5).'<br>Multiplication :'           .multiply(15,5).'<br>Division : '.division(15,5);


//function as another function argument
$result = division(multiply(6,4),addition(10,2));

echo "<br>Calling of function as another function argument <br> Result :" .$result; 



//global variables inside the function

$userName = 'Dhaduk-Jenish';
$password = 12345678;

function display(){
    global $userName, $password;

    echo '<br>UserName is :' .$userName. '<br>Password is : ' .$password;
}
display();


?>