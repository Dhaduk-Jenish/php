<?php

if (isset($_GET['dice'])) {
    
    $dice = rand(1 , 6);
    echo $dice .'<br>';
}


?>
<form action="">
    <input type="submit" name='dice' value="Roll a Dice"><br>
    </form>