<?php
// app/core/App.php

class App {
    protected $router;

    public function __construct() {
        // Carrega o array de rotas mapeadas de dentro de app/routes/web.php
        $routes = require_once dirname(__DIR__) . '/routes/web.php';
        
        // Inclui e instancia o roteador moderno
        require_once __DIR__ . '/Router.php';
        $this->router = new Router($routes);
        
        $this->run();
    }

    private function run() {
        // Captura a URL que limpamos no index.php (padrão home)
        $url = $_GET['url'] ?? 'home';
        $url = rtrim($url, '/');

        // Envia para o método dispatch do Router processar
        $this->router->dispatch($url);
    }
}
