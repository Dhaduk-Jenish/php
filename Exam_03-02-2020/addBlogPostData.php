<?php

    if (isset($_POST['blogPost'])) {
        $clean = cleanArray($_POST['blogPost']);
        insertData($clean);
    }
    
    function cleanArray($postArray){


        $databaseArray = [];
        foreach ($postArray as $key => $value) {
            switch ($key) {
                case 'title':
                    $databaseArray[$key] = $value;
                    break;
                case 'content':
                    $databaseArray[$key] = $value;
                    break;
                case 'url':
                    $databaseArray[$key] = $value;
                    break;
                case 'datetime':
                    $databaseArray['published_at'] = $value;
                    break;
                case 'parent' : 
                    $databaseArray['category_id'] = implode(',' ,$value);
                break;
                    
                case 'image':
                    $databaseArray[$key] = $value;
                    if(isset($_GET['id'])){
                        $databaseArray['uid'] = $_GET['id'];
                    }
                break;   
                 
                    
            }
        }
        return ($databaseArray);
    }

    function insertData($cleanArray){
        $connection = new mysqli("localhost", "root", "", "user_information");
        $column = '';
        $row = '';
        foreach ($cleanArray as $fields => $value) {
            $column .= $fields .",";
            $row .= "'" .$value . "',";
        }
        $column = mb_substr( $column,0 , -1);
        $row = mb_substr( $row,0 , -1);

        $insertRow = "INSERT INTO `blog-post` ($column) VALUES ($row)";

            if(mysqli_query($connection, $insertRow)){
                $id = $_GET['id'];
                echo "<script>window.location.href = 'dashboard.php?id=$id' </script>";
            }
            else {
               // echo mysqli_error($connection);
            }

    }
    function getValue($fieldName){
        if (isset($_GET['updateid'])) {
            
        $id = $_GET['updateid'];
        $connection = new mysqli("localhost", "root", "", "user_information");
            
        $query = "SELECT $fieldName FROM `blog-post` where bid = $id";
            //   echo $query;
            $data = mysqli_query($connection , $query);
            if (mysqli_num_rows($data) > 0) { 
                    $row = mysqli_fetch_assoc($data); 
                        return $row[$fieldName];   
         
            }
                        
        }

    }
    if (isset($_GET['updateid'])) {
        if (isset($_POST['blogPost'])) {
               $clean = cleanArray($_POST['blogPost']);
               update($clean);
        }
        
    }
    function update($cleanArray){
        $connection = new mysqli("localhost", "root", "", "user_information");
        $id = $_GET['updateid'];
        foreach ($cleanArray as $key => $value) {
            
            $updateQuery = "UPDATE `blog-post` SET $key = '$value' 
                        WHERE bid = '$id'";
            //echo $updateQuery. '<br>';
            if(mysqli_query($connection, $updateQuery)){
                // $id = $_GET['id'];
                // echo "<script>window.location.href = 'dashboard.php?id=$id' </script>";
            }
                else{
                    echo mysqli_error($connection);
                }
        }
    }
?>