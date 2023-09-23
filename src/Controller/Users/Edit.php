<?php

namespace Akimov\Crud\Controller\Users;

use Akimov\Crud\Core\Controller\Controller;
use Akimov\Crud\Core\Response;
use Akimov\Crud\Core\View;

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
        $this->response->setBody($view->render('user/form.phtml', [
            'user' => $user
        ]));

        return $this->response;
    }
}