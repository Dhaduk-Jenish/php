<?php

if (isset($_POST['overWrite'] , $_POST['name']) && !empty($_POST['overWrite'])) {
    $file = fopen('names.txt' , 'w');
    $name = $_POST['name'];

    fwrite( $file , $name);
}

else if (isset($_POST['append'] , $_POST['name']) && !empty($_POST['append'])) {
    $file = fopen('names.txt' , 'a');
    $name = $_POST['name'];

fwrite( $file , "\n".$name);
}

$readFile = file('names.txt');
$flag = 1;

foreach($readFile as $names){
    
    if ($flag == count($readFile)) {
        echo $names;
    }
   
    if ($flag < count($readFile)) {
        echo $names . ', ';
    }
    
    $flag++;
    
}

?>


<form action="" method="POST">
    Name: <input type="text" name="name"> <br><br><br>
    <input type="submit" value="overWrite" name="overWrite">

    <input type="submit" value="append" name="append"><br><br>

    <a href="names.txt">go to file</a>

</form>
