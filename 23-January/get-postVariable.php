<?php

if (isset($_GET['Name'], $_GET['city'] , $_GET['password'])) {
    
    $name = $_GET['Name'];
    $city = $_GET['city'];
    $password = $_GET['password'];
    $checkPassword = '12345678';

    if(!empty($name) && !empty($city) && !empty($password)){
        echo 'Hello, ' .$name;
        echo '<br>City : ' .$city;
        if ($password == $checkPassword) {
            echo '<br>Your Password is correct.';
        }
        else {
            echo '<br>Your Password is isn\'t Correct.';

        }
    }
    else {
        echo 'Please Enter Details.';
    }

}
  
?>


<form action="" method="get">

Enter name : <br>
    <input type="text" name='Name'><br><br><br>
Enter City : <br>
    <input type="text" name='city'><br><br><br>
Enter Password : <br>
    <input type="password" name='password'><br><br><br>
<input type="submit" value="Submit"> 

</form>