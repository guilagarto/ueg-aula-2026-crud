<?php
// app/models/Usuario.php
require_once dirname(__DIR__) . '/config/database.php';

class Usuario {

    // Busca um usuário no banco a partir do e-mail informado
    public static function buscarPorEmail($email) {
        $pdo = Database::conectar();
        
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email LIMIT 1");
        $stmt->execute(['email' => $email]);
        
        return $stmt->fetch(); // Retorna o array com os dados ou false se não achar
    }
}
