<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar // 8ou80 Jornada</title>
    
    <!-- Link para o CSS global funcionar localmente -->
    <link rel="stylesheet" href="/proj-ueg-aula/public/assets/css/style.css">
    
    <!-- 🎨 ESTILIZAÇÃO DO LOGIN CARD -->
    <style>
        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fdfdfd;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            padding: 20px;
        }

        .login-card {
            background-color: #ffffff;
            border: 1px solid #eaeaea;
            padding: 48px 40px;
            width: 100%;
            max-width: 420px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.01);
            text-align: center;
        }

        .login-logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: #111111;
            letter-spacing: -1px;
            margin-bottom: 8px;
        }

        .login-subtitle {
            font-size: 0.95rem;
            color: #555555;
            margin-bottom: 36px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #111111;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            font-size: 0.95rem;
            border: 1px solid #eaeaea;
            border-radius: 6px;
            background-color: #fafafa;
            outline: none;
            transition: all 0.2s;
            box-sizing: border-box;
        }

        .form-input:focus {
            background-color: #ffffff;
            border-color: #111111;
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            background-color: #111111;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 10px;
        }

        .btn-login:hover {
            background-color: #222222;
        }

        .login-footer-text {
            margin-top: 24px;
            font-size: 0.85rem;
            color: #888888;
        }

        .login-footer-text a {
            color: #0052cc;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>
<body class="login-wrapper">

    <div class="login-card">
        <div class="login-logo">⚡ 8ou80 Jornada</div>
        <p class="login-subtitle">Faça login para gerenciar sua evolução</p>
<!-- Insira este bloco logo acima do formulário no login.php -->
<?php if (isset($erro) && !empty($erro)): ?>
    <div style="background-color: #ffebee; color: #c62828; padding: 12px; border-radius: 6px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px; border: 1px solid #ffcdd2;">
        <?= htmlspecialchars($erro) ?>
    </div>
<?php endif; ?>

        <!-- Formulário que aponta para a rota de autenticação -->
        <form action="/proj-ueg-aula/public/login" method="POST">
            
            <div class="form-group">
                <label class="form-label">E-mail ou Registro</label>
                <input type="email" name="email" class="form-input" placeholder="seu@email.com" required autocomplete="email">
            </div>

            <div class="form-group">
                <label class="form-label">Sua Senha</label>
                <input type="password" name="senha" class="form-input" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn-login">Entrar no Portal</button>
        </form>

        <p class="login-footer-text">
            Esqueceu seus dados? <a href="#">Solicitar suporte</a>
        </p>
    </div>

</body>
</html>
