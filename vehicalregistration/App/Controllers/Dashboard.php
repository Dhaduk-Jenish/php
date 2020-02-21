<?php

namespace App\Controllers;

use App\Models\dbOperation;

use \Core\View;

class Dashboard extends \Core\Controller
{
   
    public function service()
    {
        session_start();
        $serviceArray = $this->serviceArray($_POST);
        $serviceArray['status'] = 'pending';
        $serviceArray['userId'] =  $_SESSION['user_id'];
        // print_r($serviceArray);
        
        $check = dbOperation::insert($serviceArray, 'serviceregistrations');

        if ($check != null) {
            $data = dbOperation::getAll('serviceregistrations'); 
            // print_r($data);   
            View::renderTemplate('dashboard/dashboard.html',
                                ['serviceData'=>$data, 'status' => 'set']);
        }

    }
    public function update()
    {  
        session_start();
        $serviceArray = $this->serviceArray($_POST);
        $serviceArray['status'] = 'pending';
        $serviceArray['userId'] =  $_SESSION['user_id'];
        $id = $this->route_params['id'];

        $check = dbOperation::update('serviceregistrations', 'serviceId', $id,$serviceArray);

        if ($check != null) {
            $serviceData = dbOperation::getAll('serviceRegistrations');

            View::renderTemplate('Admin/index.html',['serviceData'=>$serviceData]);
        }
        
    }

    protected $serviceArray = [];
    public function serviceArray($sectionArray)
    {
        foreach($sectionArray as $fieldName => $value){
            switch ($fieldName) {
                 case 'title':     
                     $serviceArray[$fieldName] = $value;      
        
                    break;
                 case 'vehicalNumber':     
                     $serviceArray[$fieldName] = $value;      
         
                    break;
                 case 'licenceNumber':     
                     $serviceArray[$fieldName] = $value;      
        
                    break;
                 case 'date':     
                     $serviceArray[$fieldName] = $value;      
         
                    break;
                 case 'timeSlot':     
                     $serviceArray[$fieldName] = $value;      
 
                 break;
                 case 'vehicalIssue':     
                    $serviceArray[$fieldName] = $value;      

                break;
                case 'serviceCenter':     
                    $serviceArray[$fieldName] = $value;      

                break;
            }
        } 
        return ($serviceArray);
    }
}

?>