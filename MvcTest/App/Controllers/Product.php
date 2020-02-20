<?php

namespace App\Controllers;

use App\Models\dbOperation;
use \Core\View;

class Product extends \Core\Controller
{
    public function view()
    {
        $urlKey = $this->route_params['key']; 
        $query = "SELECT
                        *
                    FROM
                        products
                    WHERE `urlKey` = '$urlKey'";
        $data = dbOperation::getJoinData($query);
        // print_r($data);

        $categories  = dbOperation::getData('categories', 'parentCategory', 0);
        $subCategories  = dbOperation::getData('categories', 'parentCategory!', 0);
        View::renderTemplate('FrontEnd/header.html',
            ['categories'=>$categories, 'subCategories'=>$subCategories]);

        View::renderTemplate('FrontEnd/content.html', 
                        ['productData'=>$data[0],'status'=>'product']);

        $data = dbOperation::getAll('cms_pages');
        View::renderTemplate('FrontEnd/footer.html',['cmsData'=>$data]); 
    }
}

?>