<?php

$connection = new mysqli("localhost", "root", "", "user_information");

$query = "SELECT id,parent_catogory,created_at FROM catogory";

$data = mysqli_query($connection, $query);


if(isset ( $_GET['deleteid'] ) && !empty($_GET['deleteid'])) {
    global $connection ;
    $id = $_GET['deleteid'];
    $query = "DELETE FROM catogory WHERE id='$id' ";
        
    if (mysqli_query($connection , $query)) {
    
    }
    else {
        echo "not Deleted" . mysqli_error($connection);
    }
}



?>