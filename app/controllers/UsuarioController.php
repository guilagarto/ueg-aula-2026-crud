<?php
// app/controllers/UsuarioController.php

class UsuarioController {

    // 🗓️ Carrega a página da Agenda
    public function agenda() {
        require_once dirname(__DIR__) . '/views/agenda.php';
    }

    // 🗺️ Carrega a página Minha Jornada
    public function jornada() {
        require_once dirname(__DIR__) . '/views/minha-jornada.php';
    }

    // 🎓 Carrega a página de Certificados
    public function certificados() {
        require_once dirname(__DIR__) . '/views/certificados.php';
    }

    // 🏆 Carrega a página de Conquistas/Gamificação
    public function conquistas() {
        require_once dirname(__DIR__) . '/views/conquistas.php';
    }

    // 👤 Carrega a página do Perfil do usuário
    public function perfil() {
        require_once dirname(__DIR__) . '/views/perfil.php';
    }
}
