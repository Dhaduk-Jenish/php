<?php

$userName = $_POST['userName'];

if( isset($userName) && !empty($_POST['userName']) )    
{
    if( strtoupper($userName) == 'JENISH' ){
        echo 'Hello, ' .$userName;
        echo '<br>Your name in Upper case : ' . strtoupper($userName);
    }
}
?>

<form action="" method="POST">
    <input type="text" name="userName"><br>
    <input type="submit" value="Submit">
</form>