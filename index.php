<?php

require_once __DIR__ . '/app/core/Router.php';
require_once __DIR__ . '/app/helpers/LoggerFactory.php';
//require_once __DIR__ . '/app/helpers/EnvLoader.php';


//$logger = LoggerFactory::getLogger(__FILE__);

//$envLoader = EnvLoader::getInstance();

//$logger->info("Processing request for URI: " . $_SERVER['REQUEST_URI']);

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

$router->get('/blog', function () {
    require_once __DIR__ . '/app/views/blog/blog.php';
});

$router->get('/blog/importance-of-ssl', function () {
    require_once __DIR__ . '/app/views/blog/ssl-blog.php';
});

$router->get('/blog/jwt-use-and-how-to', function () {
    require_once __DIR__ . '/app/views/blog/jwt-blog.php';
});

$router->get('/blog/advantage-of-responsive-website', function () {
    require_once __DIR__ . '/app/views/blog/responsive-website.php';
});


//Backend PHP Controllers/processors
$router->post('/send-query', function () {
    require_once __DIR__ . '/php/process.php';
});

// Dispatch the request
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
