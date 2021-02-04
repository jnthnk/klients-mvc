<?php


namespace app\core;


class Request {
  
  // 
  
  public function getPath() {
    
    $path = $_SERVER['REQUEST_URI'] ?? '/';
    
    $index = strpos($path, '?');
    
    if ($index !== false) {
      $path = substr($path, 0, $index);
    }
    
    return $path;
    
  }
  
  // 
  
  public function getMethod() {
    
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    
    return $method;
    
  }
  
}

