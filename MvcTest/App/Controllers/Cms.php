<?php

namespace App\Controllers;
use App\Models\dbOperation;
use \Core\View;


class Cms extends \Core\Controller{

    public function cmsPage()
    {
        // $url = $this->route_params['page'];
        
        $url = $_SERVER['QUERY_STRING'];
        $url = substr($url, strripos($url, "/")+1);
        
        if ($url == 'cmsPage') {
            $url = 'homePage';
        } elseif ($url == '') {
            $url = 'homePage';
        }
        $url = "'".$url."'";


        $categories  = dbOperation::getAll('categories');
        View::renderTemplate('FrontEnd/header.html',
            ['categories'=>$categories]); 
    
        $content = dbOperation::getData('cms_pages', 'urlKey', $url);

        if ($content != null) {
            View::renderTemplate('FrontEnd/content.html',
                    ['cmsData'=>$content[0]]); 
        } else {
            View::renderTemplate('FrontEnd/content.html');
        }
        
        $data = dbOperation::getAll('cms_pages');
        View::renderTemplate('FrontEnd/footer.html',['cmsData'=>$data]); 
        
    }
    
}

?>