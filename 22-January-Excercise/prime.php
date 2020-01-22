<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="">
            Enter Number<input type="number" name="number">
            <input type="submit" value="Check">
            <br><br><br>
        </form>
</body>
</html>


<?php

$number = $_GET['number'];


for ($i =2; $i < $number; $i++) { 
    if ( ($number % $i) == 0) {
        echo ' NOT Prime Number';
    break;
    }
    else{
        echo 'Prime Number';
    break;
    }
}


?>