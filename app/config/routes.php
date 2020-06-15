<?php

/**
 * File: /app/routes.php
 * Description: URL custom routes are
 * defined here using the Router
 * component.
 */

use BMS\Routes\InventoryRoutes;
use Phalcon\Mvc\Router;

/** @var Router $router */
$router = $di->get('router');
$router->setDefaultNamespace('BMS\Controllers');

// Define Custom Routes here...
/**
 * Named routes are used for custom link
 * generation and other fun stuff. The
 * conventions used is action plus
 * controller separated by an underscore
 */

// System Health
$router->addGet('/health', [
    'controller'    => 'index',
    'action'        => 'health'
])->setName('health_index');

// Login
$router->addPost('/login', [
    'controller'    => 'index',
    'action'        => 'login'
])->setName('login_index');

// Register
$router->addPost('/register', [
    'controller'    => 'index',
    'action'        => 'register'
])->setName('register_index');

// Product Type Routes

// ====== Router Groups =========
// Inventory Routes
$router->mount(new InventoryRoutes());

$router->handle($_GET['_url'] ?? '/');