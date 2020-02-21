<?php

namespace App\Controllers;

use App\Models\dbOperation;

use \Core\View;

class Admin extends \Core\Controller
{
    public function user()
    {
        // echo "hello";
        $serviceData = dbOperation::getAll('serviceRegistrations');

        View::renderTemplate('Admin/index.html',['serviceData'=>$serviceData]);
    }

    public function edit()
    {
        $id = $this->route_params['id'];
        $serviceData = dbOperation::getData('serviceRegistrations','serviceId',$id);

        View::renderTemplate('service/serviceForm.html',
                ['serviceData'=> $serviceData , 'set'=>'set']);
    }

}

?>