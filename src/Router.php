<?php

namespace Akimov\Crud;

class Router
{
    private const GET = 'GET';
    private const POST = 'POST';
    private array $routes = [];

    /**
     * get
     *
     * @param string $route
     * @param callable|string $callback
     * @return void
     */
    public function get(string $route, callable|string $callback, string $objMethod = 'index') : void 
    {
        $this->routes[] = [
            'path' => $route,
            'callback' => $callback,
            'method' => self::GET,
            'objMethod' => $objMethod,
        ];  
    }

    /**
     * post
     *
     * @param string $route
     * @param callable|string $callback
     * @return void
     */
    public function post(string $route, callable|string $callback, string $objMethod = 'index') : void 
    {
        $this->routes[] = [
            'path' => $route,
            'callback' => $callback,
            'method' => self::POST,
            'objMethod' => $objMethod,
        ];  
    }
        
    /**
     * getRoutes
     *
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * run
     *
     * @param array $server
     * @return void
     */
    public function run(array $server): void
    {
        $controller = null;
        $objMethod = 'index';
        $requestUri = parse_url($server['REQUEST_URI']);
        $requestPath = $requestUri['path'];
        $method = $server['REQUEST_METHOD'];

        foreach ($this->routes as $route) {
            if($route['path'] === $requestPath && $route['method'] === $method){
                $controller = $route['callback'];
                $objMethod = $route['objMethod'];
                break;
            }
        }

        $request = new Request(array_merge($_GET, $_POST));
        $response = new Response();

        if(!$controller){
            $controller = function (Request $request,Response $response) {
                $response->setBody('404 Not found!');
                return $response;
            };
        }

        if(is_string($controller) && class_exists($controller)) {
            $controller = new $controller();
        }

        call_user_func_array(array($controller, $objMethod), [$request, $response]);
        

        $response->render();
    }
}