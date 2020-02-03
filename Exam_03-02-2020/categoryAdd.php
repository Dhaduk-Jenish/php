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
            case 'meta_title':
                $databaseArray[$fieldName] = $value;      
                    
                break;
            case 'parent':
                $databaseArray['parent_catogory'] = $value;      
                        
                break;

        }
    }
    return $databaseArray;
}

if (isset($_POST['addcategory'])) {
    
    $categoryarr = createArray($_POST['category']);

    insert('catogory', $categoryarr);
}

function insert($table , $section_array){
        
    $connection = new mysqli("localhost", "root", "", "user_information");

    $fields = implode("," ,array_keys($section_array));    
    $values = "'".implode("','" ,$section_array)."'";
    
    $insertRow = "INSERT INTO $table ($fields) VALUES ($values)";
    //echo $insertRow;
   
    if(mysqli_query($connection , $insertRow)){
    //echo "<script>window.location.href='login.php?id=$userid ' ;</script>";
          
    }
    else {
        echo 'not inserted ' .mysqli_error($connection);
    }
}


?>