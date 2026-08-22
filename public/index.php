<?php
// public/index.php

// public/index.php
session_start();

// 1. Diagnóstico de erros ativo...
ini_set('display_errors', 1);

// 1. Diagnóstico de erros ativo para ambiente de desenvolvimento
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Importa a classe de inicialização do sistema com caminho absoluto correto
require_once __DIR__ . '/../app/core/App.php';

// 3. Captura a URL amigável vinda do .htaccess (padrão é 'home')
$url = $_GET['url'] ?? 'home';
$url = rtrim($url, '/');

// 4. Dá o start na aplicação MVC invocando a classe App
$app = new App();
