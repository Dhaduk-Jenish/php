<?php

namespace App\Controllers;

use App\Models\dbOperation;

use \Core\View;

class Login extends \Core\Controller
{
    public function user()
    {
        View::renderTemplate('Login/loginForm.html');
    }
    public function form()
    {
        View::renderTemplate('Login/serviceForm.html');
    }

    public function loginValidate()
    {
        $loginArray = [];
        foreach ($_POST as $key => $value) {
            $loginArray[$key] = $value; 
        }
        // print_r($loginArray);
        $check = dbOperation::getAll('users');
        foreach ($check as $key => $value) {
            // echo $value['email'];
                if ($value['email'] == $loginArray['email'] && $value['password'] == $loginArray['password'])  {
                    $flag = 1;   
                }
                else{
                    $flag = 0;
                }
        }
        if ($flag == 1 ) {
            session_start();
            $_SESSION['user_id'] = $value['userId'];
            $data = dbOperation::getData('serviceRegistrations', 'userId', $value['userId']); 

            View::renderTemplate('dashboard/dashboard.html',
            ['serviceData'=>$data, 'status' => 'set']);
        }
        else{
            echo "invalid Details";
            View::renderTemplate('login/loginForm.html');
        }

    }

}

?>