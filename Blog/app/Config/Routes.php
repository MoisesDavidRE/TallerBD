<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('posts/ej1', 'PostController::ejercicio01');
$routes->get('posts/ej2', 'PostController::ejercicio02');
$routes->get('posts/ej3', 'PostController::ejercicio03');
$routes->get('posts/ej4', 'PostController::ejercicio04');
$routes->get('posts/ej5', 'PostController::ejercicio05');
$routes->get('posts/ej6', 'PostController::ejercicio06');
$routes->get('posts/ej7', 'PostController::ejercicio07');
$routes->get('posts/ej8', 'PostController::ejercicio08');
$routes->get('posts/ej9', 'PostController::ejercicio09');
$routes->get('posts/ej10', 'PostController::ejercicio010');
$routes->get('posts/dump', 'DumpController::index');

