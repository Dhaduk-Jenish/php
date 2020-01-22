<?php

$row = 5;
$star = 1;


echo '<table border="1px">';
    for ($i=1; $i <= $row ; $i++) { 
        echo '<tr>';
        for ($j=1; $j <= $star; $j++) { 
            echo '<td>*</td>';
        }
        for ($k=1; $k <=$i; $k++) { 
            echo '<td>0</td>';
        }
        $star += $i + 1 ;
        echo '</tr>';
    }
echo '</table>';

?>