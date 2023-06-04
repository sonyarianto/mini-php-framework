<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Config.php';
require_once __DIR__ . '/../src/Container.php';
require_once __DIR__ . '/../src/Blade.php';
require_once __DIR__ . '/../src/Application.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

$request = Request::createFromGlobals();

$routes = new RouteCollection();

require_once __DIR__ . '/../src/routes.php'; // load routes

$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);

$requestUri = $request->getPathInfo();

if ($requestUri != '/') {
    $requestUri = rtrim($requestUri, '/');
}

$generator = new UrlGenerator($routes, $context);

try {
    $parameters = $matcher->match($requestUri, EXTR_SKIP);
    list($controllerClass, $controllerMethod) = explode('::', $parameters['_class_and_method']);

    $action = new $controllerClass();
    $action->$controllerMethod(['request' => $request, 'generator' => $generator, 'parameters' => $parameters]);
} catch (ResourceNotFoundException $e) {
    $response = new Response('404 - Not Found', 404);
    $response->send();
} catch (Exception $e) {
    $response = new Response('500 - An error occurred', 500);
    $response->send();
}