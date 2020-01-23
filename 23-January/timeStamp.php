<?php

$time = time();
echo $time;


$currentTime  = date(' h:i:s ' , time() );
echo '<br>Current Time is : ' .$currentTime;

$date = date('d-m-Y' , $time);
echo '<br> Date is : ' .$date;


$actual_time = date(' D d M Y  @  H:i:s' , $time);
echo '<br>Date and time are : ' .$actual_time;

$modifiedTime = date(' D d M Y  @  H:i:s' , $time-(7*5*30*15) );
echo '<br>Modified Time is : '   .$modifiedTime;


?>
