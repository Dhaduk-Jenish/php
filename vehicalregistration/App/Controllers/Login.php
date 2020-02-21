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

    public function loginValidate()
    {
        $loginArray = [];
        foreach ($_POST as $key => $value) {
            $loginArray[$key] = $value; 
        }
        // print_r($loginArray);
        $check = dbOperation::getAll('users');
        foreach ($check as $key => $value) {
                if ($value['email'] == $loginArray['email'] && $value['password'] == $loginArray['password'])  {
                    session_start();
                    $_SESSION['user_id'] = $value['userId'];

                    $data = dbOperation::getAll('serviceRegistrations'); 

                    View::renderTemplate('dashboard/dashboard.html',
                        ['serviceData'=>$data, 'status' => 'set']);            
                }
                else{
                    echo "Invalid Details";
                    View::renderTemplate('login/loginForm.html');
                }
        }

    }

}

?>