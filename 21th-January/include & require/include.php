<?php

include 'header.php';   //if header file not found then header will not include and another code willl be e                                 executed

echo '<b>Inside include.php</b></br>';

echo '<br>Name is : ' .$name;
echo '<br>Age is : ' .$age;

foreach($cars as $carName){
    echo '<br>Car Name is : ' .$carName;
}

// include_once is same as header_once


?>