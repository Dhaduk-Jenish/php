<?php

namespace App\Controllers\Admin;

use \Core\View;
use App\Models\dbOperation;
use Core\Router;
class categories extends \Core\Controller
{
    public function category()
    {
        $categories = dbOperation::getAll('categories');
        // print_r($categories);
        View::renderTemplate('Admin/Category/category.html', 
                            ['categories' => $categories]);
        if (isset($_POST['addProduct'])) {
            $router = new Router();
            $router->add('admin/product',
                    ['controller' => 'Admin\productssss', 'action' => 'addDatabase']);
        }
    }
    public function addCategories()
    {
        $categories = dbOperation::getData('categories', 'parentCategory', 0);
        View::renderTemplate('Admin/Category/addCategory.html',
                                ['categories' => $categories]);
        
    }
    public function add()
    {
        $image = $this->validateFile('image');
        $_POST['category']['image'] = $image;

        $check = dbOperation::insert($_POST['category'], 'categories');
        
        if ($check) {
            header("Location: category");
        }
        else{
            echo '<scrpit>Dublicate Entry </scrpit>';
            View::renderTemplate('Admin/Category/addCategory.html');
        }
    }
    
    public function delete()
    {
        $id = $this->route_params['id'];
     
        $check = dbOperation::delete('categories','categoryId', $id);
    
        if ($check) {
            header("Location: ../category");
        }
        else{
            echo '<scrpit>Not deleted </scrpit>';
            // View::renderTemplate('Admin/Product/add.html');
        }
    }
    
    public function edit()
    {
        $id = $this->route_params['id'];

        $category = dbOperation::getData('`categories`','`categoryId`',$id);
        $parent = dbOperation::getAll('categories');
    
        View::renderTemplate('Admin/Category/addCategory.html',
                        ['edit'=>'edit','category'=>$category[0],
                        'categories' => $parent]);

    }
    
    public function update()
    {
        
        $id = $_POST['categoryId'];
        // extract($_POST['product']);
        // $query = "UPDATE products SET productName='$productName', SKU='$SKU', 
        //         urlKey='$urlKey', `image`='$image', `status`='$status',
        //         `description`='$description', shortDescription='$shortDescription',
        //         price='$price', stock='$stock' WHERE productId=$id";

        $check = dbOperation::update('categories', 'categoryId', $id, $_POST['category']);
    
        if ($check) {
            header("Location: category");
        }
        else{
            echo '<scrpit>Not Updated </scrpit>';
            // View::renderTemplate('Admin/Product/add.html');
        }
    }
    
    public function validateFile($fieldName) {
        echo $fieldName;
        $name = $_FILES[$fieldName]['name'];
        $tmp_name = $_FILES[$fieldName]['tmp_name'];
        
        $location = '../public/uploads/';
        
        if (move_uploaded_file($tmp_name, $location.$name)) {
            return $location.$name;
        }
    }
}

?>