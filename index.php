<?php
session_start();

require_once dirname(__FILE__) . '/config/globals.php';
require_once dirname(__FILE__) . '/config/autoload.php';

use Libs\Route;
use Libs\RouteCollection;
use Libs\Router;

$collection = new RouteCollection();

$collection->attachRoute(new Route('/', array(
    '_controller' => 'Controllers\HomeController::init',
    'methods' => 'GET'
)));

$router = new Router($collection);
$router->setBasePath('/');
$route = $router->matchCurrentRequest();