<?php

$offset = $wordPosition = 0;
    if (isset($_GET['userInput'], $_GET['search'] , $_GET['replace'])) {
        

    $userInput = $_GET['userInput'];
    $searchFor = $_GET['search'];
    $replaceWith = $_GET['replace'];
    $length = strlen($searchFor);
    
        if (!empty($userInput) && !empty($searchFor) && !empty($replaceWith) ) {
            
            echo str_replace($searchFor , $replaceWith , $userInput);
            
        }
        else {
        echo '<script>
                alert("Please Enter details in all fields")
               </script>';
        }
    }


?>


<form action="">

<textarea name="userInput" cols="30" rows="10"></textarea><br><br><br>
Search For: <br>
<input type="text" name="search"><br><br>
Replace With: <br>
<input type="text" name="replace"><br><br>
<input type="submit" value="Submit">
</form>