<?php

use Akimov\Crud\Controller\Users\Edit;
use Akimov\Crud\Controller\Index;
use Akimov\Crud\Core\Router;


$router = new Router;

$router->get('/', Index::class);
$router->get('/edit', Edit::class);

$router->run($_SERVER);