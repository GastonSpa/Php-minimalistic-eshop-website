<?php

require dirname(__DIR__) . "/vendor/autoload.php"; //"\\vendor\autoload.php";

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

// routing
$router = new Core\Router();

// add the routes to the $router object ($router->routes is the routing table)
// definition : add($routeUrl, ['controller'=>'name', 'action'=>'value'])
$router->add('', ['controller'=>'Home', 'action'=>'index']); // link from nav
// $router->add('category', ['controller'=>'Category', 'action'=>'category']); // link from nav
$router->add('catalog', ['controller'=>'Catalog', 'action'=>'catalog']); // link from nav
$router->add('p', ['controller'=>'SingleProduct', 'action'=>'singleProduct']); // link from every product card
$router->add('cart', ['controller'=>'Cart', 'action'=>'cart']); // link from nav & profile
$router->add('order', ['controller'=>'Order', 'action'=>'order']); // link from Cart

$router->add('login', ['controller'=>'Login', 'action'=>'login']); // link from nav
$router->add('loging', ['controller'=>'Loging', 'action'=>'loging']); // link from login
$router->add('disconnect', ['controller'=>'Disconnect', 'action'=>'disconnect']); // link from nav
$router->add('profile', ['controller'=>'Profile', 'action'=>'profile']); // link from nav
$router->add('signin', ['controller'=>'Signin', 'action'=>'signin']); // link from login
$router->add('signing', ['controller'=>'Loging', 'action'=>'signing']); // link from login

$router->add('about', ['controller'=>'About', 'action'=>'about']); // link from nav & footer & about
// $router->add('blog', ['controller'=>'Blog', 'action'=>'blog']); // link from footer & about
$router->add('contact', ['controller'=>'Contact', 'action'=>'contact']); // link from footer & about

// $router->add('{controller}/{action}');
// example :
// $router->add('posts/index', ['controller' => 'Posts', 'action' => 'index']);


// MAJOR COMMAND
// Dispatch (envoie) the route, 
// create the controller object then run the action method
$router->dispatch($_SERVER['QUERY_STRING']);
