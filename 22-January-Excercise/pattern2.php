<?php

$row = $col = 8;

$print = 1;

echo '<table border = 1px>';
    for ($i=$row; $i >= 0; $i--) { 
        echo '<tr>';
        for ($j=$col; $j >=0  ; $j--) { 
            
            echo  '<td>'. $print . '</td>';
            $print++;
        }
        echo '</tr>';
        $print = 1;

        $col --;

    }
echo '</table>';

?>
