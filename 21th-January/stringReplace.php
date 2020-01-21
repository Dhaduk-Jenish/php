<?php


echo '<h3>substr_replace Function</h3>';
$string = 'this is an example string and this is for string function';


echo $string;
echo  '<br>'  . substr_replace($string , 'IS' , 5 , 2); 

echo '<hr><h3>str_replace Function</h3>';

$find = array('is','string','for');
$replace = array('IS','Demo','here');

echo $string;
$replacedString = str_replace($find , $replace , $string);

echo '<br>'  .$replacedString;
?>