<?php

require 'header.php';    //if header file not found ten execution will be terminated

echo '<b>Inside require.php</b></br>';

echo '<br>Name is : ' .$name;
echo '<br>Age is : ' .$age;

foreach($cars as $carName){
    echo '<br>Car Name is : ' .$carName;
}


//require 'header.php'; this will again add header file


/*  Follow this sequence for add header file only once
    require 'header.php';
    require_once 'header.php';
*/


?>