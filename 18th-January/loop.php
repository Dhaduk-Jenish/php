<?php


//for loop
for($i=0 ; $i<10 ; $i++)
{
    echo 'hello ' .$i. '<br>';
}


//while loop
$number = 1;
while($number <= 10){
    echo "number is" .$number. "<br>";
    $number ++;
}

//do while loop

$check = 1;
do{
    echo '<br>do while  statement' .$check. '<br>';
    $check ++;
}while($check<=10);


//switch 


$name = 'abhi' ;

switch($name){
    case ($name == 'jenish'):
        echo '<br>Welcome '.$name;
    break;

    case ($name == 'abhi') :
        echo '<br>Welcome ' .$name;
    break;

    default:
        echo '<br>You are not either jenish or abhi';

}





?>