<?php

$app->router->get('/', 'Home@index');
  
$app->router->get('/about', function () {
    require './tmp/views/about.php';
    return 'About Page';
});


