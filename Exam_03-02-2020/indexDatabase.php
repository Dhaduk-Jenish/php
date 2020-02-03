<?php


if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['loginbtn']) ) {

    $connection = new mysqli("localhost", "root", "", "user_information");

    $enterData = $_POST['login'];
    $email = $enterData['email'];
    $password = $enterData['password'];

    $select = "SELECT * FROM user WHERE email='$email'
                                 AND password='$password' ";
    $data = mysqli_query($connection, $select);
    if (mysqli_num_rows($data) == 0) {
        echo '<script>alert ( "Invalid Details" );</script>';
        
    }
    else {
        $row =   $data -> fetch_assoc();
        $userid = $row['useer_id'];

        echo "<script>window.location.href='dashboard.php?id=$userid ' ;</script>";
        
    }
    
}

?>



