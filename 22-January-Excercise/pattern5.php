<!-- 1 5 9
2 6 10
3 7 11
4 8 12 -->
<?php

$row = 4;
$col = $row-1;
$number = 1;

echo '<table border = 1px>';
    for ($i=1; $i <= $row; $i++) { 
        echo '<tr>';
        for ($j=1; $j <= $col; $j++) { 
            echo '<td>'  .$number .'</td>';
            $number += $row;
        }
        echo '</tr>';
        $number = 1 +$i;
    }

?>