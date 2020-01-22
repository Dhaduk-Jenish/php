<!-- 1 5 9
2 6 10
3 7 11
4 8 12 -->
<?php

$row = 4;
$col = $row-1;
$number = 1;

for ($i=1; $i <= $row; $i++) { 
    for ($j=1; $j <= $col; $j++) { 
        echo $number .'&nbsp;&nbsp;';
        $number += $row;
    }
    $number = 1 +$i;
    echo '<br>'; 
}

?>