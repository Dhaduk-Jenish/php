<?php

// require_once "../Core/router.php";
// require_once "../App/Controllers/Details.php";
// require_once "../App/Controllers/home.php";

require_once dirname(__DIR__) . '/vendor/autoload.php';

spl_autoload_register(function ($class){
    $root = dirname(__DIR__);
    $file = $root . '/'. str_replace('\\','/',$class). '.php';

    if (is_readable($file)) {
        require $root .'/'. str_replace('\\', '/', $class) . '.php';
    }

});

$routerobj = new Core\Router();

$routerobj -> setRouter("Home", ['controller' => 'Home', 'action' => 'index']);
$routerobj -> setRouter("post", ['controller' => 'Post', 'action' => 'index']);
$routerobj -> setRouter("contact", ['controller' => 'Details', 'action' => 'about-of']);
$url = $_SERVER['QUERY_STRING'];

/*
echo '<pre>';
print_r($routerobj -> getRouter());
echo '</pre>';

echo '<hr>';



if( $routerobj->match($url) ){
    echo "<pre>";
    print_r($routerobj->getMatch());
    echo "</pre>";
}
else {
    echo "Requested URL is not founded<br>";
}

echo '<hr>';

if ($routerobj->addAction($url)) {
    print_r($routerobj->getAction());
}
else {
    echo "URL is not mathc with REGEX<br>";
 }

 
echo '<hr>'; 
$routerobj->add("{controller}/{action}");
 
 echo '<br>';
 if($routerobj->getUserUrl()){
     $routerobj->getUrl();
    }
    else{
        echo "No Url Found";
    }
*/
echo '<hr>';

$routerobj->dispatch($url);


?>