<?php

namespace Akimov\Crud\Core;

use Akimov\Crud\Core\Request;
use Akimov\Crud\Core\Response;

abstract class Controller
{
    public Request $request;
    public Response $response;

    public function __construct(
        Request $request, Response $response
    )
    {
        $this->request = $request;
        $this->response = $response;
    }
    
}