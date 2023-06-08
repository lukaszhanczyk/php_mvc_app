<?php

namespace src;

class Router
{
    public array $routes = [
        '/' => 'src\Controller\AppController@index',
    ];

    private function getUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function uri(): void
    {
        $request = $this->getUri();

        if (array_key_exists($request, $this->routes)) {
            $controllerAction = $this->routes[$request];
            [$controller, $action] = explode('@', $controllerAction);

            $controllerInstance = new $controller();
            $controllerInstance->$action();
        } else {
            echo '404 - Not Found';
        }
    }
}