<?php

// 1. Ativa a exibição de erros na tela (essencial para desenvolvimento)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Pega a URL enviada pelo .htaccess (se estiver vazia, define como 'home')
$url = isset($_GET['url']) ? $_GET['url'] : 'home';

// 3. Limpa barras extras no final da URL (ex: 'sobre/' vira 'sobre')
$url = rtrim($url, '/');

// 4. Mapa de rotas do seu site
$rotas = [
    'home'   => '../views/home.php',
    'sobre'  => '../views/sobre.php',
    'minha-jornada' => '../views/minha-jornada.php',
    'agenda' => '../views/agenda.php',
    'certificados' => '../views/certificados.php',
    'conquistas' => '../views/conquistas.php',
    'perfil' => '../views/perfil.php',  
    'login' => '../views/login.php'
];

// 5. Verifica se a página solicitada existe no mapa
if (array_key_exists($url, $rotas)) {
    // Se existir, carrega a página correspondente
    require_once $rotas[$url];
} else {
    // Se não existir, carrega a página de erro 404
    require_once '../views/404.php';
}
