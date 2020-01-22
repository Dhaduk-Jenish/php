<?php

$number1 = 15;
$number2 = 60;
function HCF($num1, $num2) 
{ 
 
    if ($num1 == 0) 
       return $num2; 
    if ($num2 == 0) 
       return $num1; 
  
     
    if($num1 == $num2) 
        return $num1 ; 
      
    if($num1 > $num2) 
        return HCF( $num1-$num2 , $num2 ) ; 
    else
        return HCF( $num1 , $num2-$num1 ) ; 
}


    echo '<br> HCF of given number is :' .HCF($number1 , $number2);


?>