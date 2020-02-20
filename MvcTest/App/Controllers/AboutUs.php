<?php

namespace App\Controllers;

use \Core\View;

class AboutUs extends \Core\Controller
{
    public function indexAction()
    {
        View::renderTemplate('AboutUs/index.html');
    }

}

?>