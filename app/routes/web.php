<?php
// app/routes/web.php

return [
    'home'          => ['controller' => 'HomeController',      'acao' => 'index'],
    'agenda'        => ['controller' => 'UsuarioController',   'acao' => 'agenda'],
    'certificados'  => ['controller' => 'UsuarioController',   'acao' => 'certificados'],
    'conquistas'    => ['controller' => 'UsuarioController',   'acao' => 'conquistas'],
    'minha-jornada' => ['controller' => 'UsuarioController',   'acao' => 'jornada'],
    'perfil'        => ['controller' => 'UsuarioController',   'acao' => 'perfil'],
    'login'         => ['controller' => 'AutenticacaoController', 'acao' => 'login'],
];
