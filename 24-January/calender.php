<!-- form start  
-->

<form action="">

Enter Month : <br>
<input type="text" name="month" value=""> <br><br><br>
Enter Year : <br>
<input type="number" name="Year" value=""> <br><br>
<input type="submit" value="Submit">

</form>


<!-- form end -->


<!-- php start -->
<?php

session_start();
if(isset($_GET['month'] , $_GET['Year']))
{
    if (!empty($_GET['month']) && !empty($_GET['Year'])) {
     

        $month = $_GET['month'];
        $year = $_GET['Year'];

        $_SESSION['previousMonth'] = $month;
        $_SESSION['previousYear'] = $year;



        if ( (($month >= 1) && ($month <= 12)) && strlen($year) == 4){
            displayCalender($month , $year);
        }
        else {
            echo 'Invalid Month or Year';
        }

    }
    else {
        echo 'Enter Month and Year';
    }
}
else {
    displayCalender($_SESSION['previousMonth'] , $_SESSION['previousYear']);
}



function displayCalender($month , $year){
    $day = mktime(0,0,0, $month , 1 , $year);
    $days = cal_days_in_month(CAL_GREGORIAN,$month,$year);

    $startDay = date("w" , $day);


    echo '<table> <tr>
                    <th> Sun </th>
                    <th> Mon </th>
                    <th> Tue </th>
                    <th> Wed </th>
                    <th> Thu </th>
                    <th> Fri </th>
                    <th> Sat </th>
                </tr> 
                <tr>';    
        for ($i=0; $i < $startDay  ; $i++) { 
            echo '<td></td>' ;       
        }
        $row = 1;
        for ($date=1; $date <= $days; $date++) {     
            
            if ( ($date + $startDay -1) % 7 == 0  && $date != 1) {
                
                echo '</tr><tr> ';
                echo '<td>' .$date. '</td>';
                $row ++ ;
            }
            else {
                echo '<td>' . $date . '</td>';    
            }
            
        }
        while ($date + $startDay <= $row *7) {
            
            echo '<td> </td>';
            $date++;
        }
    echo '<tr></table> ';
}

?>



<style>
td{
    height : 50px;
    width : 50px;
    text-align : center;
    color : red;
}
table,th{
    border : 1px solid black ;
}
</style>

<!-- php end -->