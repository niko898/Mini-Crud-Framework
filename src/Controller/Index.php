<?php

namespace Akimov\Crud\Controller;

use Akimov\Crud\Core\Controller;
use Akimov\Crud\Database;
use Akimov\Crud\Response;
use Akimov\Crud\View;

class Index extends Controller
{
    /**
     * index
     *
     * @return Response
     */
    public function index(): Response
    {
        $view = new View();
        $pdo = Database::get();

        $users = [
            'name' => 'testname',
            'lastname' => 'testlastname'
        ];

        $this->response->setBody($view->render('index.phtml', [
            'users' => $users
        ]));
        return $this->response;
    }
}