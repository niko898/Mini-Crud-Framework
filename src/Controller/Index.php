<?php

namespace Akimov\Crud\Controller;

use Akimov\Crud\Database;
use Akimov\Crud\Request;
use Akimov\Crud\Response;
use Akimov\Crud\View;

class Index 
{
    public function index(Request $request, Response $response): Response
    {
        $view = new View();
        $pdo = Database::get();

        $users = [
            'name' => 'testname',
            'lastname' => 'testlastname'
        ];

        $response->setBody($view->render('index.phtml', [
            'users' => $users
        ]));
        return $response;
    }
}