<?php
// app/core/Router.php

class Router
{
    private array $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function dispatch(string $url): void
    {
        // 1. Se a rota não existir no web.php, joga para a página 404
        if (!isset($this->routes[$url])) {
            $this->carregar404();
            return;
        }

        $controllerName = $this->routes[$url]['controller'];
        $action = $this->routes[$url]['acao'];

        // 2. Caminho absoluto do controlador (sobe um nível a partir de core/ e entra em controllers/)
        $controllerPath = dirname(__DIR__) . '/controllers/' . $controllerName . '.php';

        if (!file_exists($controllerPath)) {
            $this->carregar404();
            return;
        }

        require_once $controllerPath;

        $controller = new $controllerName();

        if (!method_exists($controller, $action)) {
            $this->carregar404();
            return;
        }

        // 3. Executa a função do controlador
        $controller->$action();
    }

    private function carregar404(): void
    {
        http_response_code(404);
        // Caminho absoluto correto para a pasta app/views/
        require_once dirname(__DIR__) . '/views/404.php';
    }
}
