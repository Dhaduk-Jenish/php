<?php

namespace App\Controllers\Admin;

use \Core\View;
use App\Models\dbOperation;
use Core\Router;
class products extends \Core\Controller
{
    public function product()
    {
        $products = dbOperation::getAll('products');
        View::renderTemplate('Admin/Product/product.html', 
                            ['products' => $products]);
        if (isset($_POST['addProduct'])) {
            $router = new Router();
            $router->add('admin/product',
                    ['controller' => 'Admin\productssss', 'action' => 'addDatabase']);
        }
    }
    public function addProduct()
    {
        $products = dbOperation::getData('categories', 'parentCategory!', 0);
        View::renderTemplate('Admin/Product/addProduct.html',
                            ['categories'=>$products]);
    }
    public function add()
    {
        // extract($_POST['product']);
        $image = $this->validateFile('image');
        $_POST['product']['image'] = $image;

        $products = $_POST['category'];
        
        // print_r($products);
        // die;
        $addTransition = [];  
        $check = dbOperation::insert($_POST['product'], 'products');

        
        if ($check != null) {
            foreach ($products as $key => $value) {
                $addTransition['category_id'] = $value;
                $addTransition['product_id'] = $check;
                // echo $value;
                dbOperation::insert($addTransition, 'product_category');
            }

            header("Location: product");
        }
        else{
            echo '<scrpit>Dublicate Entry </scrpit>';
            View::renderTemplate('Admin/Product/addProduct.html');
        }
    }
    
    public function delete()
    {
        $id = $this->route_params['id'];
        // $query = "DELETE FROM products WHERE productId = $id ";
        
        $check = dbOperation::delete('products','productId', $id);
    
        if ($check) {
            header("Location: ../product");
            
        }
        else{
            echo '<scrpit>Not deleted </scrpit>';
            // View::renderTemplate('Admin/Product/add.html');
        }
    }
    
    public function edit()
    {
        $id = $this->route_params['id'];

        $categories = dbOperation::getAll('categories');

        $products = dbOperation::getData('`products`','`productId`',$id);
        array_push($products[0],'set');
    
        View::renderTemplate('Admin/Product/addProduct.html',
                ['product'=>$products[0],'categories'=>$categories ]);

    }
    
    public function update()
    {
        $id = $_POST['productId'];
        // extract($_POST['product']);
        // $query = "UPDATE products SET productName='$productName', SKU='$SKU', 
        //         urlKey='$urlKey', `image`='$image', `status`='$status',
        //         `description`='$description', shortDescription='$shortDescription',
        //         price='$price', stock='$stock' WHERE productId=$id";

        $check = dbOperation::update('products', 'productId', $id, $_POST['product']);
    
        if ($check) {
            header("Location: product");
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