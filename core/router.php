<?php


namespace app\core;


class Router {
  
  protected array $routes = [
    'get' => [],
    'post' => [],
  ];
  
  public Request $request;
  
  public function __construct($request) {
    
    $this->request = $request;
    
  }
  
  public function get($path, $func) {
    
    $this->routes['get'][$path] = $func;
    
  } 
  
  public function resolve() {
    
    $path = $this->request->getPath();
    
    echo $path;
    
  }
  
}

