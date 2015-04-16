<?php
include( __DIR__ . '/../vendor/autoload.php');

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$router = new League\Route\RouteCollection;

$router->addRoute('GET', '/acme/route', function (Request $request, Response $response) {
    pr($request);
    pr($response);
    return $response;
});

$dispatcher = $router->getDispatcher();

$response = $dispatcher->dispatch('GET', '/acme/route');

$response->send();
