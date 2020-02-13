<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Postss;

class Post extends \Core\controllers {

    public function indexAction()
    {
        // View::render('Home/index.php',[
        //     'name' => 'Jenish',
        //     'colors' => ['red', 'green', 'blue']
        // ]);
        $posts = Postss::getAll();
        View::rendorTemplate('Post/index.html', [
                'name' => 'Jenish',
                'colors' => ['red', 'green', 'white'],
                'posts' => $posts
        ]);
    }
}

?>