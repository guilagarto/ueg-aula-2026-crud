<?php
// app/views/perfil.php
require_once __DIR__ . '/components/header.php';
?>

<!-- 🎨 ESTILIZAÇÃO COMPLETA DA SEÇÃO DE PERFIL DO USUÁRIO -->
<style>
    .perfil-section {
        max-width: 1000px;
        margin: 0 auto;
        padding: 40px 24px 100px 24px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    .perfil-grid {
        display: grid;
        grid-template-columns: 0.8fr 1.2fr;
        gap: 40px;
        align-items: start;
    }

    .perfil-sidebar {
        background-color: var(--canvas-card, #ffffff);
        border: 1px solid var(--line-subtle, #eaeaea);
        border-radius: 12px;
        padding: 40px 24px;
        text-align: center;
    }

    .avatar-placeholder {
        width: 100px;
        height: 100px;
        background-color: #111111;
        color: #ffffff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        font-weight: 700;
        margin: 0 auto 20px auto;
        letter-spacing: -1px;
    }

    .user-name {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--ink-primary, #111111);
        margin: 0 0 6px 0;
        letter-spacing: -0.5px;
    }

    .user-role {
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--accent-gold, #c5a059);
        margin-bottom: 24px;
        display: block;
    }

    .info-list {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left;
        border-top: 1px solid #eaeaea;
        padding-top: 20px;
    }

    .info-item {
        font-size: 0.9rem;
        color: var(--ink-secondary, #555555);
        margin-bottom: 12px;
        display: flex;
        justify-content: space-between;
    }

    .info-item strong {
        color: var(--ink-primary, #111111);
    }

    .perfil-main-content {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .content-box {
        background-color: var(--canvas-card, #ffffff);
        border: 1px solid var(--line-subtle, #eaeaea);
        border-radius: 12px;
        padding: 32px;
        text-align: left;
    }

    .box-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin: 0 0 20px 0;
        letter-spacing: -0.3px;
        border-bottom: 1px solid #eaeaea;
        padding-bottom: 12px;
    }

    .activity-item {
        padding: 12px 0;
        border-bottom: 1px solid #f5f5f7;
        font-size: 0.95rem;
        color: var(--ink-secondary, #555555);
    }

    .activity-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .activity-date {
        font-size: 0.8rem;
        color: var(--ink-muted, #888888);
        display: block;
        margin-bottom: 2px;
    }

    @media (max-width: 768px) {
        .perfil-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="minimal-wrapper">
    <!-- Bloco de Introdução -->
    <section class="hero-container" style="padding: 100px 24px 40px 24px; text-align: center;">
        <span class="hero-eyebrow">Área do Aluno</span>
        <h1 class="hero-headline" style="font-size: 3rem; margin-bottom: 16px;">Meu Perfil</h1>
        <p class="hero-subheading" style="margin: 0 auto; max-width: 600px;">Gerencie suas informações de conta e acompanhe as estatísticas gerais da sua conta.</p>
    </section>

    <section class="perfil-section">
        <div class="perfil-grid">
            
            <!-- Barra Lateral do Usuário -->
            <!-- Altere as linhas de conteúdo da barra lateral no perfil.php -->
<div class="avatar-placeholder">
    <?= strtoupper(substr($_SESSION['usuario_nome'] ?? 'A', 0, 2)) ?>
</div>
<h2 class="user-name"><?= htmlspecialchars($_SESSION['usuario_nome'] ?? 'Aluno') ?></h2>
<span class="user-role">Nível <?= htmlspecialchars($_SESSION['usuario_nivel'] ?? '01') ?> // Explorer</span>

<ul class="info-list">
    <li class="info-item"><span>E-mail:</span> <strong><?= htmlspecialchars($_SESSION['usuario_email'] ?? '') ?></strong></li>
    <li class="info-item"><span>Registro:</span> <strong>#<?= htmlspecialchars($_SESSION['usuario_reg'] ?? '') ?></strong></li>
    <li class="info-item"><span>Status:</span> <strong style="color: #2e7d32;">Ativo</strong></li>
</ul>


            <!-- Conteúdo Principal do Perfil -->
            <div class="perfil-main-content">
                
                <!-- Bloco de Biografia / Resumo -->
                <div class="content-box">
                    <h3 class="box-title">Visão Geral</h3>
                    <p style="color: var(--ink-secondary, #555555); line-height: 1.6; margin: 0; font-size: 0.95rem;">
                        Você está progredindo firmemente na trilha de desenvolvimento estruturado. Suas principais competências atuais estão focadas no padrão arquitetural MVC e na manipulação avançada de roteamento nativo no ambiente Apache.
                    </p>
                </div>

                <!-- Bloco de Atividades Recentes -->
                <div class="content-box">
                    <h3 class="box-title">Histórico de Atividades</h3>
                    
                    <div class="activity-item">
                        <span class="activity-date">Hoje, às 12:05</span>
                        Acessou o cronograma e completou as tarefas na página de <strong>Agenda</strong>.
                    </div>
                    
                    <div class="activity-item">
                        <span class="activity-date">Ontem, às 17:40</span>
                        Visualizou a trilha evolutiva e subiu para a Fase 02 em <strong>Minha Jornada</strong>.
                    </div>
                    
                    <div class="activity-item">
                        <span class="activity-date">Há 2 dias</span>
                        Conquistou a insígnia de <strong>Mestre das Rotas</strong> no painel de Conquistas.
                    </div>
                </div>

            </div>

        </div>
    </section>
</div>

<?php
require_once __DIR__ . '/components/footer.php';
?>
