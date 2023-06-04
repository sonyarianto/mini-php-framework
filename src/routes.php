<?php
use Symfony\Component\Routing\Route;

$routes->add('app.index', new Route('/', ['_class_and_method' => 'Application::index']));
$routes->add('app.about', new Route('/about', ['_class_and_method' => 'Application::about']));
$routes->add('app.template', new Route('/template', ['_class_and_method' => 'Application::template']));
$routes->add('app.content.id', new Route('/content/{id}', ['_class_and_method' => 'Application::content']));