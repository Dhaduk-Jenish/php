<?php

namespace App\Controllers;

use \Core\View;

class ContactUs extends \Core\Controller
{
    public function indexAction()
    {
        View::renderTemplate('ContactUs/index.html');
    }

}

?>