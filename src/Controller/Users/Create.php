<?php

namespace Akimov\Crud\Controller\Users;

use Akimov\Crud\Core\Response;
use Akimov\Crud\Core\Controller;
use Akimov\Crud\Model\User\User;

class Create extends Controller
{
    public function index(): Response
    {
        $params = $this->request->getParams();

        $user = new User;
        if(!empty($params['firstname'])){
            $user->setFirstName($params['firstname'])
        }

        if(!empty($params['firstname'])){
            $user->setFirstName($params['firstname'])
        }
        

    }
}