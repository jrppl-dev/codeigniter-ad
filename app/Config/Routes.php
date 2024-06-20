<?php

use CodeIgniter\Router\RouteCollection;


use Config\Services;

$routes = Services::routes();
service('auth')->routes($routes);

