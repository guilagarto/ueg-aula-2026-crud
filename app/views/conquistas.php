<?php
// app/views/conquistas.php
require_once __DIR__ . '/components/header.php';
?>

<!-- 🎨 ESTILIZAÇÃO COMPLETA DA SEÇÃO DE CONQUISTAS GAMIFICADAS -->
<style>
    .conquistas-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 24px 100px 24px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    .gamificacao-status {
        background-color: var(--canvas-card, #ffffff);
        border: 1px solid var(--line-subtle, #eaeaea);
        border-radius: 12px;
        padding: 24px 40px;
        max-width: 800px;
        margin: 0 auto 60px auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-align: left;
    }

    .status-item {
        display: flex;
        flex-direction: column;
    }

    .status-val {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--ink-primary, #111111);
        letter-spacing: -0.5px;
    }

    .status-lbl {
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--ink-muted, #888888);
        margin-top: 4px;
    }

    .grid-conquistas {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 24px;
    }

    .badge-card {
        background-color: var(--canvas-card, #ffffff);
        border: 1px solid var(--line-subtle, #eaeaea);
        padding: 40px 24px;
        border-radius: 12px;
        text-align: center;
        transition: all 0.25s ease-out;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .badge-card:hover {
        border-color: #b2b2b2;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        transform: translateY(-2px);
    }

    .badge-icon-wrapper {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background-color: #f5f5f7;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.2rem;
        margin-bottom: 24px;
        border: 1px solid transparent;
        transition: all 0.3s ease;
    }

    /* Insígnia Desbloqueada Efeito Especial */
    .badge-card.unlocked .badge-icon-wrapper {
        background-color: #ebf8ff;
        border-color: rgba(0, 82, 204, 0.15);
        box-shadow: 0 0 20px rgba(0, 82, 204, 0.05);
    }

    .badge-title {
        font-size: 1.15rem;
        font-weight: 700;
        margin: 0 0 8px 0;
        letter-spacing: -0.3px;
        color: var(--ink-primary, #111111);
    }

    .badge-condition {
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--accent-gold, #c5a059);
        margin-bottom: 12px;
    }

    .badge-card.locked .badge-condition {
        color: var(--ink-muted, #888888);
    }

    .badge-description {
        color: var(--ink-secondary, #555555);
        font-size: 0.9rem;
        line-height: 1.5;
        margin: 0;
    }
</style>

<div class="minimal-wrapper">
    <!-- Bloco de Introdução -->
    <section class="hero-container" style="padding: 100px 24px 40px 24px; text-align: center;">
        <span class="hero-eyebrow">Gamificação</span>
        <h1 class="hero-headline" style="font-size: 3rem; margin-bottom: 16px;">Minhas Conquistas</h1>
        <p class="hero-subheading" style="margin: 0 auto; max-width: 600px;">Desbloqueie insígnias exclusivas à medida que você cumpre desafios e progride na sua trilha de desenvolvimento.</p>
    </section>

    <section class="conquistas-section">
        <!-- Painel de Status Geral do Aluno -->
        <div class="gamificacao-status">
            <div class="status-item">
                <span class="status-val">Nível 02</span>
                <span class="status-lbl">Progresso Atual</span>
            </div>
            <div class="status-item" style="border-left: 1px solid #eaeaea; border-right: 1px solid #eaeaea; padding: 0 40px;">
                <span class="status-val">2.450 XP</span>
                <span class="status-lbl">Pontuação Total</span>
            </div>
            <div class="status-item">
                <span class="status-val">02 / 04</span>
                <span class="status-lbl">Insígnias Ganhas</span>
            </div>
        </div>

        <!-- Grid de Medalhas -->
        <div class="grid-conquistas">
            
            <!-- Conquista 1: Desbloqueada -->
            <div class="badge-card unlocked">
                <div class="badge-icon-wrapper">🚀</div>
                <h3 class="badge-title">Primeiro Passo</h3>
                <span class="badge-condition">Conquistado</span>
                <p class="badge-description">Emitida automaticamente ao configurar e subir o deploy inicial do ecossistema MVC no ar.</p>
            </div>

            <!-- Conquista 2: Desbloqueada -->
            <div class="badge-card unlocked">
                <div class="badge-icon-wrapper">⚡</div>
                <h3 class="badge-title">Mestre das Rotas</h3>
                <span class="badge-condition">Conquistado</span>
                <p class="badge-description">Desbloqueada ao estruturar o arquivo de mapeamento amigável e rodar páginas sem extensões brutas na URL.</p>
            </div>

            <!-- Conquista 3: Bloqueada -->
            <div class="badge-card locked" style="opacity: 0.6;">
                <div class="badge-icon-wrapper" style="filter: grayscale(100%);">💾</div>
                <h3 class="badge-title">Arquiteto de Dados</h3>
                <span class="badge-condition">Bloqueado</span>
                <p class="badge-description">Crie sua primeira conexão orientada a objetos estável com o MySQL para liberar esta recompensa.</p>
            </div>

            <!-- Conquista 4: Bloqueada -->
            <div class="badge-card locked" style="opacity: 0.6;">
                <div class="badge-icon-wrapper" style="filter: grayscale(100%);">🛡️</div>
                <h3 class="badge-title">Sentinela Digital</h3>
                <span class="badge-condition">Bloqueado</span>
                <p class="badge-description">Conclua o fluxo completo de autenticação e proteção de sessões de usuários logados para liberar.</p>
            </div>

        </div>
    </section>
</div>

<?php
require_once __DIR__ . '/components/footer.php';
?>
