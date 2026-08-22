<?php
// app/controllers/AutenticacaoController.php
require_once dirname(__DIR__) . '/models/Usuario.php';

class AutenticacaoController {

    public function login() {
        // Se o usuário já estiver logado, redireciona direto para a home
        if (isset($_SESSION['usuario_id'])) {
            header("Location: /proj-ueg-aula/public/home");
            exit;
        }

        $erro = null;

        // Processa o formulário de login enviado via POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $senha = $_POST['senha'] ?? '';

            if (!empty($email) && !empty($senha)) {
                // Consulta o banco de dados através do Model
                $usuario = Usuario::buscarPorEmail($email);

                // 🔥 VALIDAÇÃO EM TEXTO PURO (Para bater com o '123' do seu banco)
                if ($usuario && $senha === $usuario['senha']) {
                    
                    // Grava os dados do aluno na sessão global
                    $_SESSION['usuario_id']    = $usuario['id'];
                    $_SESSION['usuario_nome']  = $usuario['nome'];
                    $_SESSION['usuario_nivel'] = $usuario['nivel'];
                    $_SESSION['usuario_reg']   = $usuario['registro'];
                    $_SESSION['usuario_email'] = $usuario['email'];

                    // Redireciona para a Home Page
                    header("Location: /proj-ueg-aula/public/home");
                    exit;
                } else {
                    $erro = "E-mail ou senha inválidos.";
                }
            } else {
                $erro = "Preencha todos os campos obrigatórios.";
            }
        }

        // Carrega a view entregando a variável $erro para a tela se houver
        require_once dirname(__DIR__) . '/views/login.php';
    }

    public function logout() {
        // Destrói completamente a sessão ao sair
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();

        header("Location: /proj-ueg-aula/public/login");
        exit;
    }
}
