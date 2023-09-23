<?php

namespace Akimov\Crud\Core;

use Akimov\Crud\Request;
use Akimov\Crud\Response;

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