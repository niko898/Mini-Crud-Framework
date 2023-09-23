<?php

namespace Akimov\Crud\Controller;

use Akimov\Crud\Core\Controller;
use Akimov\Crud\Core\Response;
use Akimov\Crud\Core\View;

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