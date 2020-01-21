<form action="" method='POST' >
    <lable>Main String :</lable><input type="text" name="string"><br>
    <lable>Find word :</lable><input type="text" name="find"><br>
    <lable>Replace word :</lable><input type="text" name="replace"><br>
    <input type="submit" value="Submit">
    <hr>
</form>


<style>
    lable{
        display : inline-block;
        width : 100;
    }

</style>


<?php
    
    // echo '<pre>';
    // print_r($_SERVER);


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if( isset($_POST['find'],$_POST['replace'],$_POST['string']) )
        {
        echo 'Replaced String is ::::<br> ';        
            echo str_replace($_POST['find'],$_POST['replace'],$_POST['string']);
        }
        else{
            echo '<script>alert("Request Method is not POST")</script>';
        }
    }
    

    
?>