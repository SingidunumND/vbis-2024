<?php

namespace app\core;

class Router
{
    public array $routes = [];
    // ['get','userCreate',['UserController:class','readUser']]

    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function get(string $path, $callback) : void
    {
        $this->routes['get'][$path] = $callback;
    }
    public function resolve()
    {
        //todo finish method
        $path = $this->request->path();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;

        if (is_array($callback))
        {
            $callback[0] = new $callback[0]();

            return call_user_func($callback);
        }

        http_response_code(404);
        echo "NOT FOUND!";
    }
}