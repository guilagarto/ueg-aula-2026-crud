<?php
// app/controllers/HomeController.php

class HomeController {
    public function index() {
        // Caminho exato e seguro para a nova pasta app/views/
        require_once dirname(__DIR__) . '/views/home.php';
    }
}
