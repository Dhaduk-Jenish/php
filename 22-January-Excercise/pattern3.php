<?php

$row = 8;

echo '<table border = 1px>';
    for ($i=1 ; $i <= $row ; $i++) { 
        echo '<tr>';
            for ($j=1; $j <= $i  ; $j++) { 
                echo '<td>*</td>';
            }
        echo '</tr>';
    }
echo '</table>';

?>
