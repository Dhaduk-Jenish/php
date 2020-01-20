<?php

echo 'hello<br>';

//  exit('This is die and exit function');

echo 'World';


$name = 'jenish';
$name == 'jenish' or die('<br>Name is not jenish(die and exit method )');

echo '<br>';



//die and exit in if_else
//only used when we want to stop execution at some condition
$number = 12;
if($number == 10 or exit('Not equal')){
    echo 'Equal'; 
}
else{
    echo 'Not Equal';
}
?>