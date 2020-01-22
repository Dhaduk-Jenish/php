<?php

$row = 8;
$number = 1;
echo '<table border = 1px>';
for ($i=1 ; $i <= $row ; $i++) {
    echo '<tr>' ;
    for ($j=1; $j <= $i  ; $j++) { 
        echo '<td>'  .$number .'</td>';
        $number++;
    }
    echo '</tr>';
    $number = 1;
}

?>
