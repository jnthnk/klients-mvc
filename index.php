<?php


// 

require_once __DIR__ . '/vendor/autoload.php';

use app\core\App;


// 

$app = new App();


// 

$app->router->get('/', function(){
  
  echo 'Hello World!';
  
});

$app->router->get('/clients', function(){
  
  echo 'Hello Clients!';
  
});


// 

$app->run();

