<?php

namespace App\Controllers;

use \Core\View;
use App\Models\product;
class Admin extends \Core\Controller
{
    public function login()
    {
        View::renderTemplate('Admin/login.html');
        
        
        if (isset($_POST['submitButton'])) {
        
            
            if ($_POST['userName'] == 'jenish99' && $_POST['password'] == 'jenish123') {
                header("Location: http://localhost/cybercom/MvcTest/Public/admin/dashboard");
            }
            else {
                echo "<script>alert('Invalid Details') </script>";  
                // View::renderTemplate('Admin/login.html');
            }
        }
    }
    public function dashboard()
    {
        View::renderTemplate('Admin/dashboard.html');
    }

    public function product()
    {
        $products = product::getAll();
        View::renderTemplate('Admin/Product/product.html', 
                            ['products' => $products]);
    }
    public function addProduct()
    {
        View::renderTemplate('Admin/Product/add.html');
        if (isset($_POST['addProduct'])) {
            $addProduct = $_POST['product'];
            header("Location: http://localhost/cybercom/MvcTest/Public/admin/product");
        }
    }
}

?>