<?php

//if else && else if
$name = 'AbHi';
if(strtolower($name) == 'jenish'){
    echo 'Hello ' . strtoupper($name);
}
else if (strtolower($name) == 'abhi'){
    echo 'hello ' . strtoupper($name);

}
else{
    echo 'you are not jenish.<br>';
}


//if_else in side if
$name = 'jenish';
$age = 10;

if($name == 'jenish'){
    if($age>10){
        echo 'you are ' . $name . 'and your age is above 10';

    }
    else{
        echo 'you are ' . $name . 'and your age is below 10';
    }
}
else{
    echo 'you are not jenish';

}




$number = 215;

$num1 = 100;
$num2 = 1000;

if($number >= $num1  && $number <= $num2)
{
    echo '<br>okay';
}
else{
    echo '<br>your number is not between '.$num1. ' and ' .$num2;
}


?>