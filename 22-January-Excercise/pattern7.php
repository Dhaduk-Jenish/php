<?php


$row = 10;
$col = 10;
$number = 1;
echo '<table>';

for ($i=1; $i <= $row ; $i++) { 
    
    echo '<tr>';
    for ($j=1; $j <= $col ; $j++) { 
        echo '<td>' .($i*$number) . '</td>';   
    $number++;
    }
    $number = 1;
    echo '</tr>';
    

}
echo '</table>';
?>

<style>
table,tr,td{
    border : 1px solid black;
    border-collapse : collapse;
}

</style>