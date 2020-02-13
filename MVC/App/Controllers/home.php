<?php

namespace App\Controllers;

use \Core\View;

class Home extends \Core\controllers {

    public function indexAction()
    {
        // View::render('Home/index.php',[
        //     'name' => 'Jenish',
        //     'colors' => ['red', 'green', 'blue']
        // ]);
        View::rendorTemplate('Home/index.html', [
                'name' => 'Jenish',
                'colors' => ['red', 'green', 'white']
        ]);
    }
}

?>