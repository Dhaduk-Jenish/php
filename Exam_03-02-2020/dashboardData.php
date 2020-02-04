<?php

$connection = new mysqli("localhost", "root", "", "user_information");




if(isset ( $_GET['deleteid'] ) && !empty($_GET['deleteid'])) {
    global $connection ;
    $id = $_GET['deleteid'];
    $query = "DELETE FROM `blog-post` WHERE bid='$id' ";
        
    if (mysqli_query($connection , $query)) {
    
    }
    else {
        echo "not Deleted" . mysqli_error($connection);
    }
}
if(isset ( $_GET['deleteCatId'] ) && !empty($_GET['deleteCatId'])) {
    global $connection ;
    $id = $_GET['deleteCatId'];
    $query = "DELETE FROM `category` WHERE `cat_id`=$id ";
    if (mysqli_query($connection , $query)) {
    
    }
    else {
        echo "not Deleted" . mysqli_error($connection);
    }
}



?>