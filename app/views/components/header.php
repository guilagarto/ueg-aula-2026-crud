<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal do Aluno</title>
    
    <!-- 🔥 CAMINHO ABSOLUTO LOCAL PARA O XAMPP -->
    <link rel="stylesheet" href="/proj-ueg-aula/public/assets/css/style.css">
</head>
<body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Evolução // 8ou80</title>
    
    <!-- Link absoluto para o CSS funcionar em todas as rotas amigáveis do MVC -->
    <link rel="stylesheet" href="/proj-ueg-aula/public/assets/css/style.css">
    
    <!-- 🎨 ESTILIZAÇÃO DO MENU MINIMALISTA GLOBAL -->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #fdfdfd;
        }
        .global-header {
            border-bottom: 1px solid #eaeaea;
            background-color: #ffffff;
            padding: 18px 24px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        .logo-text {
            font-weight: 700;
            font-size: 1.1rem;
            color: #111111;
            text-decoration: none;
            letter-spacing: -0.5px;
        }
        .nav-menu {
            display: flex;
            gap: 24px;
        }
        .nav-link {
            color: #555555;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: color 0.2s ease;
        }
        .nav-link:hover {
            color: #111111;
        }
        .btn-perfil {
            padding: 8px 16px;
            background-color: #111111;
            color: #ffffff !important;
            border-radius: 6px;
            font-weight: 600;
        }
        .btn-perfil:hover {
            background-color: #222222;
        }
    </style>
</head>
<body>
    <header class="global-header">
        <nav class="nav-container">
            <a href="/proj-ueg-aula/public/home" class="logo-text">⚡ 8ou80 Jornada</a>
            <!-- Substitua o bloco da nav-menu dentro do seu header.php por este -->
            <?php
// Detecta se o site está rodando localmente no XAMPP
$isLocal = ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['REMOTE_ADDR'] == '::1');

// Se for local, inclui a pasta do projeto. Se for na Hostinger, usa apenas a barra inicial
$base_path = $isLocal ? '/proj-ueg-aula/public' : '';
?>

<header class="global-header">
    <nav class="nav-container">
        <a href="<?= $base_path ?>/home" class="logo-text">⚡ 8ou80 Jornada</a>
        <div class="nav-menu">
            <a href="<?= $base_path ?>/home" class="nav-link">Início</a>
            <a href="<?= $base_path ?>/agenda" class="nav-link">Agenda</a>
            <a href="<?= $base_path ?>/minha-jornada" class="nav-link">Jornada</a>
            <a href="<?= $base_path ?>/certificados" class="nav-link">Certificados</a>
            <a href="<?= $base_path ?>/conquistas" class="nav-link">Conquistas</a>
            <a href="<?= $base_path ?>/perfil" class="nav-link btn-perfil">Meu Perfil</a>
        </div>
    </nav>
</header>


        </nav>
    </header>
