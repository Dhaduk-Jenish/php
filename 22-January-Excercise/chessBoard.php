<?php

$row = 8;

echo '<table border = 1px>';
for ($i=1 ; $i <= $row ; $i++) {
    echo '<tr>' ;
    for ($j=1; $j <= $row  ; $j++) { 
        if(($i % 2) == 0  ){
            if(($j % 2) == 0){
                echo '<td >'.'</td>';
            }
            else {
                echo '<td class="black">'.'</td>';
            }            
        }
        else {
            if(($j % 2) == 0){
                echo '<td class="black" >'.'</td>';
            }
            else {
                echo '<td >'.'</td>';
            }
        }
    }
    echo '</tr>';
    
}

?>

<style>
table,tr{
    border : 1px solid black;
    border-collapse : collapse;
    /* width : 100px;
    height : 15px; */
}
td{
    border : 1px solid black;
    border-collapse : collapse;
    width : 50px;
    height : 50px;
}


.black{
    background-color: black;
}

</style>