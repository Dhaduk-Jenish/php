<?php

$number = 153;
$new = $number;
$answer = 0; 

   
while($new != 0)
{
    $reminder = $new%10;
    $answer += $reminder*$reminder*$reminder;
    $new = floor($new/10);
    
}
if ($number == $answer) {
    echo 'Number is Armstrong number.';
}
else {
    echo 'Number is not Armstrong number.';
}

?>
