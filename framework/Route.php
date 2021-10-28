<?php

namespace Framework;

use http\Exception\RuntimeException;

class Route
{

    protected $routes =[];

    public function register($route)
    {
        $this->routes[] = $route;
    }

    //CHAINING METHODS
    //return this
    public function define($routes)
    {
        $this->routes= $routes;
        return $this;
    }

    public function redirect($uri)
    {
        if(!array_key_exists($uri,$this->routes)){
            require 'resources/views/errors/404.php';
            return $this;
        }
        if(!file_exists($this->routes[$uri])){
//            throw new \RuntimeException("No s'ha trobat el controlador" . $this->routes[$uri]);
            dd("No sha trobat el controlador" . $this->routes[$uri]);
        }
        require $this->routes[$uri];
        return $this;
    }

}