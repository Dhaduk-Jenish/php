<?php 
namespace Core;
class Router{
    protected $routes = [];

    public function setRouter($route, $path)
    {
        $this->routes[$route] = $path;
    }

    public function getRouter()
    {
        return $this->routes;
    }

    protected $path = [];
    
 
    public function match($url)
    {
              
        foreach ($this->routes as $check => $path) {
           if ($url == $check) {
                $this->path = $path;
                return true;
            }
        }
        return false;
    }

    public function getMatch()
    {
        return $this->path;
    }
    
    public function checkString($string)
    {
        $regex = '/^[A-Z][a-z]+ [A-Z][a-z]+/';
        if (preg_match($regex, $string)) {
            echo '<br>Valid<br>';
        }
        else{
            echo '<br>Not Valid<br>';
        }
    }

    protected $action = [];
    public function addAction($url)
    {
        $regex = '/(?P<controller>[a-z]+)\/(?P<action>[a-z]+)/';
        if (preg_match($regex, $url, $match)) {
            $this->action = $match;
            return true;
        }else {
            return false;
        }
    }
    
    public function getAction()
    {   
        return $this->action;
    }

    public function pregReplace($string){
        $regex = '/\./';
        return preg_replace($regex, '_', $string,1,$count);
    }

    protected $routeArray = [];
    public function add($route, $params = [])
    {
        //convert route to REGEX : escape forward slashes
        $route = preg_replace('/\//','\\/', $route);
        

        //convert variables e.g. {controller}\
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\0>[a-z-]+)', $route);

        //add start and end delimeters in regex
        $route = '/^' . $route . '$/i';

        $this->routeArray[$route] = $params ; 
    }
    public function getUserUrl()
    {
        foreach($this->action as $key => $value){
            if (is_string($key)) {
                $this->path[$key] = $value;
            }
        }
        return true;
    }
    public function getUrl()
    {
        print_r($this->path);
    }

    public function dispatch($url)
    {
        if ($this->match($url)) {
            $controller = $this->path['controller'];
            $controller = $this->converttoStudlyCaps($controller);
            // $controller = "App\Controllers\\$controller";

            $controller = $this->getNamespace() . $controller;
            if (class_exists($controller)) {
                
                $controller_obj =  new $controller;

                $action = $this->path['action'];
                $action = $this->converttoCamelCase($action);

                if (is_callable([$controller_obj, $action])) {
                    $controller_obj->$action();
                }
                else {
                    echo "$method Is Not Founded";
                }
                
            }
            else {
                echo "Class $controller Not Found";
            }
        }
    }

    public function converttoStudlyCaps($controller)
    {
        return str_replace(' ','',ucwords(str_replace('-','',$controller)));
    }
    public function converttoCamelCase($string)
    {
        return lcfirst($this->converttoStudlyCaps($string));
    }
    
    public function getNamespace()
    {
        $namespace = "App\Controllers\\";
        if (array_key_exists('namespace', $this->path)) {
            $namespace .= $this->param['namespace'] . '\\';
        }
        return $namespace;
    }
}
?>