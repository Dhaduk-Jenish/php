<?php



function createArray($category){

    $databaseArray = [];
    foreach ($category as $fieldName => $value) {
        switch ($fieldName) {
            case 'title':
                $databaseArray[$fieldName] = $value;      
                
                break;
            case 'content':
                $databaseArray[$fieldName] = $value;      
                    
                break;
            case 'url':
                $databaseArray[$fieldName] = $value;      
                
                break;
            case 'metatitle':
                $databaseArray[$fieldName] = $value;      
                    
                break;
            case 'parent':
                $databaseArray['cat_name'] = $value;    
                if (isset($_GET['id'])) {
                    $databaseArray['user_id'] = $_GET['id'];
                }  
                        
                break;

        }
    }
    return $databaseArray;
}

if (isset($_POST['addcategory'])) {
    
    $categoryarr = createArray($_POST['category']);
    if(isset($_GET['id'])){
        insert('category', $categoryarr);
    }
}
function insert($table , $section_array){
        
    $connection = new mysqli("localhost", "root", "", "user_information");

    $fields = implode("," ,array_keys($section_array));    
    $values = "'".implode("','" ,$section_array)."'";
    
    $insertRow = "INSERT INTO $table ($fields) VALUES ($values)";
    echo $insertRow;
   
    if(mysqli_query($connection , $insertRow)){
        $userid = $_GET['id'];
    echo "<script>window.location.href='dashboard.php?id=$userid ' ;</script>";
          
    }
}


function getValue($fieldName){
    if (isset($_GET['updateCatId'])) {
        
    $id = $_GET['updateCatId'];
    $connection = new mysqli("localhost", "root", "", "user_information");
        
    $query = "SELECT $fieldName FROM `category` where cat_id = $id";
         //   echo $query;
        $data = mysqli_query($connection , $query);
        if (mysqli_num_rows($data) > 0) { 
                $row = mysqli_fetch_assoc($data); 
                    return $row[$fieldName];   
     
        }
                    
    }
}

if (isset($_GET['updateCatId'])) {
    if (isset($_POST['category'])) {
        $clean = createArray($_POST['category']);
        update($clean);
    }
    
}
function update($cleanArray){
    $connection = new mysqli("localhost", "root", "", "user_information");
    $id = $_GET['updateCatId'];
    foreach ($cleanArray as $key => $value) {
        
        $updateQuery = "UPDATE `category` SET $key = '$value' 
                    WHERE cat_id = '$id'";
        // echo $updateQuery. '<br>';
        if(mysqli_query($connection, $updateQuery)){}
    }
}

?>