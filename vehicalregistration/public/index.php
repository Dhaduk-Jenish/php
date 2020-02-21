<?php


    require_once dirname(__DIR__) . '/vendor/autoload.php';

    spl_autoload_register(function ($class)
    {
        $root = dirname(__DIR__);
        $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
        if (is_readable($file))
        {
            require $root . '/' . str_replace('\\', '/', $class) . '.php';
        }
    });

    set_error_handler('Core\Error::errorHandler');
    set_exception_handler('Core\Error::exceptionHandler');

    $router = new Core\Router();

    $router->add('{controller}/{action}');
    $router->add('{controller}/{id:\d+}/{action}');
    $router->add('admin/{controller}/{action}');
    
    $router->add('{controller}/{action}/{id:\d+}');
    
    $router->add('', ['controller' => 'login', 'action' => 'user']);
  
    $url = $_SERVER['QUERY_STRING'];
    $router->dispatch($url);
    
?>