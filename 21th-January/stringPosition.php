<?php

$string = 'This is an example string. This is for learning string function';
$length = strlen($string);
$find = 'is';
$findLength = strlen($find);

$position = strpos($string , $find);
echo $position;

$wordPosition = 0;
$position = strpos($string , $find , 9);
echo  '<br>find word after the 9th position :'  .$position;

while( $stringPosition = strpos($string , $find , $wordPosition ) )
{
    echo '<br><b>'. $find. '</b> found at position ' .$stringPosition ;
    $wordPosition = $stringPosition + $findLength;
}


?>