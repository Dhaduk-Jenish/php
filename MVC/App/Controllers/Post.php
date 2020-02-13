<?php

namespace App\Controllers;

use \Core\View;

class Post extends \Core\controllers {

    public function indexAction()
    {
        // View::render('Home/index.php',[
        //     'name' => 'Jenish',
        //     'colors' => ['red', 'green', 'blue']
        // ]);
        View::rendorTemplate('Post/index.html', [
                'name' => 'Jenish',
                'colors' => ['red', 'green', 'white']
        ]);
    }
}

?>