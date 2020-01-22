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
            Enter Length<input type="number" name="length">
            <input type="submit" value="Check">
            <br><br><br>
        </form>
</body>
</html>


<?php

    $length = $_GET['length'];
    $fibo = [0, 1];

    
    for ($i = 2; $i < $length; $i++) {
        $sum = $fibo[$i - 1] + $fibo[$i - 2];
        $fibo[$i] = $sum;
        
    }

    for ($i=0; $i < sizeof($fibo); $i++) { 
        echo $fibo[$i] .',';
    }


?>