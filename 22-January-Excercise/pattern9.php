<?php

$row = 12;
$col = 5;


echo '<table>';
for ($i=0; $i < $row; $i++) { 
    echo '<tr>';
    for ($j=0; $j < $col; $j++) { 
        
        if ($i==0 || $i== $row -1) {
            echo '<td>*</td>';
        }
        else if (($i % 3) == 0){
            if ($j == 0 || $j == $col-1) {
                echo '<td>*</td>';
            }
            else {
                echo '<td></td>';
            }
        }

    }
    echo '</tr>';
}

echo '</table>';


?>

<style>
table{
    cell-padding : 5px; 
}

</style>