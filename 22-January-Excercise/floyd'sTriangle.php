<?php

$row = 5;
$number = 1;
for ($i=1 ; $i <= $row ; $i++) { 
    for ($j=1; $j <= $i  ; $j++) { 
        echo $number .'&nbsp';
        $number++;
    }
 
    echo '<br>';
}

?>
