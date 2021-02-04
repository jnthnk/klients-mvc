<?php


namespace app\core;


class Router {
  
  protected array $routes = [
    'get' => [],
    'post' => [],
  ];
  
  public function get($path, $func) {
    
    $this->routes['get'][$path] = $func;
    
  } 
  
}

