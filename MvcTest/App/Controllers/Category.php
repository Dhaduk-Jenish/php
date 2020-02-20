<?php

namespace App\Controllers;

use App\Models\dbOperation;
use \Core\View;

class Category extends \Core\Controller
{
    public function indexAction()
    {       
        View::renderTemplate('FrontEnd/Category/index.html');
    }

    public function editAction()
    {
        echo 'Hello from edit action from Posts controller.';
        echo '<p>Route parameters: <pre>' .
        htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }

    public function view()
    {
        $urlkey = $this->route_params['key']; 
        $query = "SELECT
                        p.*
                    FROM
                        products AS p
                    INNER JOIN product_category AS pc
                    ON
                        p.productId = pc.product_id
                    INNER JOIN categories AS c
                    ON
                        c.categoryId = pc.category_id
                    WHERE
                        c.urlKey = '$urlkey'";

        // print_r($data);

        $categories  = dbOperation::getAll('categories');
        View::renderTemplate('FrontEnd/header.html',
            ['categories'=>$categories]); 
        
        $data = dbOperation::getJoinData($query);    
        View::renderTemplate('FrontEnd/content.html',
                                ['productData'=>$data, 'status' => 'set']);

        $data = dbOperation::getAll('cms_pages');
        View::renderTemplate('FrontEnd/footer.html',['cmsData'=>$data]); 

    }
}

?>