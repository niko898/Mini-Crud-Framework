<?php

namespace Akimov\Crud\Controller;

use Akimov\Crud\Request;
use Akimov\Crud\Response;
use Akimov\Crud\View;

class Edit 
{
    public function index(Request $request, Response $response)
    {
        $view = new View();
        $params = $request->getParams();
        if(!empty($params['user_id'])){

        }

        $user = [];

        $response->setBody($view->render('edit.phtml', [
            'user' => $user
        ]));

        return $response;
    }
}