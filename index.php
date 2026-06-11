<?php

require_once __DIR__ . '/app/core/Router.php';

$router = new Router();

//Static Routes
$router->get('/', 'HomeController@index');
$router->get('/our-services', 'ServiceController@index');
$router->get('/contact-us', function () {
    require_once __DIR__ . '/app/views/contact-us/contact-us.php';
});
$router->get('/about-us', function () {
    require_once __DIR__ . '/app/views/about-us/about-us.php';
});


//Backend PHP Controllers/processors
$router->post('/send-query', function () {
    require_once __DIR__ . '/php/process.php';
});

// Dispatch the request
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
