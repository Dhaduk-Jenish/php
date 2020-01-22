<?php

$row = 8;
$col = $row + $row--;
echo '<table border = 1px>';
    for ($i=$row; $i >= 0; $i--) { 
        echo '<tr>';
        for ($j=$col; $j > 0 ; $j--) { 
            echo "<td>* </td>";
        }
        echo '</tr>';
        $col -= 2;
        
    }
echo '</table>';
?>
