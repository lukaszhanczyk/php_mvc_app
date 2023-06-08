<?php

namespace src;

use src\Service\NbpCurrencyService;

class Router
{
    public array $routes = [
        '/' => 'src\Controller\AppController@index',
        '/currency/' => 'src\Controller\CurrencyController@index',
    ];
    private NbpCurrencyService $nbpCurrencyService;

    public function __construct()
    {
        $this->nbpCurrencyService = new NbpCurrencyService();
    }

    private function getUri(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function handleUri(): void
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

    public function updateDatabase(): void
    {
        $this->nbpCurrencyService->updateRows();
    }
}