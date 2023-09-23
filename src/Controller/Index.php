<?php

namespace Akimov\Crud\Controller;

use Akimov\Crud\Request;
use Akimov\Crud\Response;

class Index 
{
    public function index(Request $request, Response $response): Response
    {
        $response->setBody('Index');
        return $response;
    }
}