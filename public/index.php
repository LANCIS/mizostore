<?php
include( __DIR__ . '/../vendor/autoload.php');

/**
 * @todo Move to routes.php file
 */
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$router = new League\Route\RouteCollection;

$router->addRoute('GET', '/', 'Http\Controllers\IndexController::index'); // Classname::methodName

$dispatcher = $router->getDispatcher();

$response = $dispatcher->dispatch('GET', '/');

$response->send();
