<?php


    
    function createCleanArray($sectionArray){
        $databaseArray = [];

        foreach($sectionArray as $fieldName => $value){
           switch ($fieldName) {
               case 'prefix':     
                    $databaseArray[$fieldName] = $value;      
                   break;
                case 'firstName':     
                    $databaseArray[$fieldName] = $value;      
       
                   break;
                case 'lastName':     
                    $databaseArray[$fieldName] = $value;      
        
                   break;
                case 'mobile':     
                    $databaseArray[$fieldName] = $value;      
       
                   break;
                case 'email':     
                    $databaseArray[$fieldName] = $value;      
        
                   break;
                case 'password':     
                    $databaseArray[$fieldName] = $value;      

                break;
                case 'information':     
                    $databaseArray[$fieldName] = $value;      

                break;
           }
        
        }
    
        return $databaseArray;
     
    }
   

    if (isset($_POST['submit'])) {
        $userArray = createCleanArray($_POST['register']);
        
        if (!isset($_GET['id'])) {
            insert('user',$userArray);
        }
    }

    function insert($table , $section_array){
    
        $connection = new mysqli("localhost", "root", "", "user_information");
    
        $fields = implode("," ,array_keys($section_array));    
        $values = "'".implode("','" ,$section_array)."'";
        
        $insertRow = "INSERT INTO $table ($fields) VALUES ($values)";
        //echo $insertRow;
       
        if(mysqli_query($connection , $insertRow)){
        echo "<script>window.location.href='login.php?id=$userid ' ;</script>";
              
        }
        else {
            echo '<script>alert("Dublicate Record") </script>';
        }
    }
    function getValue($fieldName){
        if (isset($_GET['id'])) {
            
        $id = $_GET['id'];
        $connection = new mysqli("localhost", "root", "", "user_information");
            
        $query = "SELECT $fieldName FROM user where useer_id = $id";
            //   echo $query;
            $data = mysqli_query($connection , $query);
            if (mysqli_num_rows($data) > 0) { 
                    $row = mysqli_fetch_assoc($data); 
                        return $row[$fieldName];   
         
            }
                        
        }

    }
    if (isset($_GET['id'])) {
  
        if (isset($_POST['submit'])) {
            $id = $_GET['id'];
            $connection = new mysqli("localhost", "root", "", "user_information");

            $userArray = createCleanArray($_POST['register']);
            foreach ($userArray as $key => $value) {
                
                $updateQuery = "UPDATE user SET $key = '$value' WHERE useer_id = '$id'";
                if(mysqli_query($connection, $updateQuery)){}
                else{
                    echo mysqli_error($connection);
                }
            }

            
        }
    }
?>
