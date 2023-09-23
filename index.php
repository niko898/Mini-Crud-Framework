<?php

use Akimov\Crud\Controller\Edit;
use Akimov\Crud\Controller\Index;
use Akimov\Crud\Router;

require 'vendor/autoload.php';

$router = new Router;

$router->get('/', Index::class);

$router->get('/edit', Edit::class);

$router->run($_SERVER);