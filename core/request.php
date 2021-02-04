<?php


namespace app\core;


class Request {
  
  public function getPath() {
    
    $path = $_SERVER['REQUEST_URI'] ?? '/';
    
    if (strpos($path, '?') !== false) {
      
      
      
    }
    
    echo 'Hello World';
    
  }
  
  public function getMethod() {
    
    
    
  }
  
}