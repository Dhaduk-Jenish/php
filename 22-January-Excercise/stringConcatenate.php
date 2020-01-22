<?php

$string1 = 'smith';
$string2 = 'john';
$result = '';

for ($i=0, $j =0; $i < strlen($string1) || $j <= strlen($string2) ; $i++ ,$j++ ) { 
   
   if ($j < strlen($string2)) {
        if($i < strlen($string1)){
            $result .=  $string1[$i] . $string2[$j]; 
        }
        else{
            $result .= $string2[$j];
        }
              
   
    }
   else if ($i < strlen($string1)){
       $result .= $string1[$i];
   }
  
   
}
echo 'string 1 is :' .$string1;
echo '<br>string 2 is :' .$string2;
echo '<br>after concatenation :' .$result;


?>