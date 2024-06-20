<?php

namespace Core\Config;

use Config\Services;

$routes = Services::routes();

$routes->group('', ['filter' => 'session', 'namespace' => 'Core\Controllers'], function ($routes) {
    $routes->get('/', 'HomeController::index');
    $routes->get('/home', 'HomeController::index');
//    $routes->get('/articles', 'ArticlesController::index');
//    $routes->get('/articles/(:num)', 'ArticlesController::show/$1');
//    $routes->post('/articles/create', 'ArticlesController::create');

    $routes->get('/set-password', 'PasswordController::set', ['as' => 'set-password']);
    $routes->post('/set-password', 'PasswordController::update', ['as' => 'set-password']);
});

