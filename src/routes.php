<?php

use Akimov\Crud\Controller\Users\Edit;
use Akimov\Crud\Controller\Index;
use Akimov\Crud\Core\Router;

use Akimov\Crud\Core\Model\Model;

$db = new Model();

$router = new Router;

$router->get('/', Index::class);
$router->get('/edit', Edit::class);

$router->run($_SERVER);