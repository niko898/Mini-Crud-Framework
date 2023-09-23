<?php

namespace Akimov\Crud\Controller;

use Akimov\Crud\Core\Controller;
use Akimov\Crud\Response;
use Akimov\Crud\View;

class Edit extends Controller
{
    /**
     * index
     *
     * @return Response
     */
    public function index(): Response
    {
        $view = new View();
        $params = $this->request->getParams();
        if(!empty($params['user_id'])){

        }

        $user = [];
        $this->response->setBody($view->render('edit.phtml', [
            'user' => $user
        ]));

        return $this->response;
    }
}