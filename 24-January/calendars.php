<!-- form start  
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calender</title>
</head>
<body>
<form  method= "POST">

    Enter start Month : <br>
    <input type="text" name="startMonth" value=""> <br><br><br>
    Enter start Year : <br>
    <input type="number" name="startYear" value=""> <br><br>
    Enter End Month : <br>
    <input type="text" name="endMonth" value=""> <br><br><br>
    Enter End Year : <br>
    <input type="number" name="endYear" value=""> <br><br>
    <input type="submit" value="Submit">

</form>
    
</body>
</html>


<!-- form end -->


<!-- php start -->
<?php

session_start();


$month = ['1'=> "January" ,'2'=> "February", '3'=> "March",'4'=> "April", '5'=> "May",
'6'=> "June", '7'=> "July",'8'=> "August",'9'=> "September",'10'=> "Octomber",'11'=> "November",'12'=> "December"];


if(isset($_POST['startMonth'] , $_POST['startYear'] , $_POST['endMonth'] , $_POST['endYear']))
{
    if (!empty($_POST['startMonth']) && !empty($_POST['startYear']) && !empty($_POST['endMonth']) &&!empty($_POST['endYear'])) {
     

        $startMonth = $_POST['startMonth'];
        $startYear = $_POST['startYear'];
        $endMonth  = $_POST['endMonth'];
        $endYear = $_POST['endYear'];


        $_SESSION['startMonth'] = $startMonth;
        $_SESSION['startYear'] = $startYear;

        $_SESSION['endMonth'] = $endMonth;
        $_SESSION['endYear'] = $endYear;


        if ( (($startMonth >= 1) && ($startMonth <= 12)) && strlen($startYear) == 4 &&
            (($endMonth >= 1) && ($endMonth <= 12)) && strlen($endYear) == 4){

            if ($startYear == $endYear) {
                for ($i=$startMonth; $i <= $endMonth; $i++) {
                    echo '<h3>' .$month[$i]. ' ' .$endYear. '<h3>';
                    displayCalender($i , $endYear);    
                }
            }
            if ($startYear < $endYear) {
                for ($i=$startMonth; $i <= 12; $i++) { 
                    echo '<h3>' .$month[$i]. ' ' .$startYear. '<h3>';
                    displayCalender($i , $startYear); 
                }
                for ($i=1; $i <= $endMonth; $i++) { 
                    echo '<h3>' .$month[$i]. ' ' .$endYear. '<h3>';
                    displayCalender($i , $endYear); 
                }
            }   
          
            
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

    $startMonth = $_SESSION['startMonth'];
    $startYear = $_SESSION['startYear'];

    $endMonth = $_SESSION['endMonth'];
    $endYear = $_SESSION['endYear'];

    if ($startYear == $endYear) {
        for ($i=$startMonth; $i <= $endMonth; $i++) {
            echo '<h3>' .$month[$i]. ' ' .$endYear. '<h3>';
            displayCalender($i , $endYear);    
        }
    }
    if ($startYear < $endYear) {
        for ($i=$startMonth; $i <= 12; $i++) { 
            echo '<h3>' .$month[$i]. ' ' .$startYear. '<h3>';
            displayCalender($i , $startYear); 
        }
        for ($i=1; $i <= $endMonth; $i++) { 
            echo '<h3>' .$month[$i]. ' ' .$endYear. '<h3>';
            displayCalender($i , $endYear); 
        }
    }   
}



function displayCalender($startMonth , $startYear){
    $day = mktime(0,0,0, $startMonth , 1 , $startYear);
    $days = cal_days_in_month(CAL_GREGORIAN,$startMonth,$startYear);

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
    echo '<tr></table> <br><br>';
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