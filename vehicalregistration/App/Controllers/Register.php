<?php

namespace App\Controllers;

use App\Models\dbOperation;

use \Core\View;

class Register extends \Core\Controller
{
    public function registration()
    {
        View::renderTemplate('Login/registerForm.html');
    }

    public function validateRegister()
    {
        $userArray = $this->userArray($_POST);
        $addressArray = $this->addressArray($_POST);
        $check = dbOperation::insert($userArray, 'users');
        $addressArray['userId'] = $check;
        $check = dbOperation::insert($addressArray, 'useraddresses');

        if ($check != null) {
            View::renderTemplate('Login/loginForm.html');
        }
        else{
            echo "<script>Enter Valid Details </script>";
        }
        
    }

    protected $userArray = [];
    public function userArray($sectionArray)
    {
        foreach($sectionArray as $fieldName => $value){
            switch ($fieldName) {
                 case 'firstName':     
                     $userArray[$fieldName] = $value;      
        
                    break;
                 case 'lastName':     
                     $userArray[$fieldName] = $value;      
         
                    break;
                 case 'phoneNumber':     
                     $userArray[$fieldName] = $value;      
        
                    break;
                 case 'email':     
                     $userArray[$fieldName] = $value;      
         
                    break;
                 case 'password':     
                     $userArray[$fieldName] = $value;      
 
                 break;
            }
        } 
        return ($userArray);
    }

    protected $addressArray = [];
    public function addressArray($sectionArray)
    {
        foreach($sectionArray as $fieldName => $value){
            switch ($fieldName) {
                 case 'street':     
                     $addressArray[$fieldName] = $value;      
        
                    break;
                 case 'city':     
                     $addressArray[$fieldName] = $value;      
         
                    break;
                 case 'state':     
                     $addressArray[$fieldName] = $value;      
        
                    break;
                 case 'zipcode':     
                     $addressArray['zipCode'] = $value;      
         
                    break;
                 case 'country':     
                     $addressArray[$fieldName] = $value;      
 
                 break;
            }
        } 
        return ($addressArray);
    }
     
    
}

?>