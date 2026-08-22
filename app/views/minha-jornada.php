<?php
// app/views/minha-jornada.php
require_once __DIR__ . '/components/header.php';
?>

<!-- 🎨 ESTILIZAÇÃO EXCLUSIVA DA LINHA DO TEMPO DA JORNADA -->
<style>
    .jornada-timeline {
        max-width: 800px;
        margin: 60px auto;
        padding: 0 24px;
        position: relative;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    /* Linha vertical de fundo */
    .jornada-timeline::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 40px;
        width: 2px;
        background-color: var(--line-subtle, #eaeaea);
    }

    .fase-item {
        position: relative;
        margin-bottom: 48px;
        padding-left: 80px;
    }

    /* Indicador circular na linha */
    .fase-indicador {
        position: absolute;
        top: 4px;
        left: 26px;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #ffffff;
        border: 2px solid var(--line-subtle, #eaeaea);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.85rem;
        font-weight: 700;
        z-index: 2;
        transition: all 0.3s ease;
    }

    /* Fase Concluída */
    .fase-item.concluida .fase-indicador {
        background-color: #111111;
        border-color: #111111;
        color: #ffffff;
    }

    /* Fase Atual (Em Progresso) */
    .fase-item.atual .fase-indicador {
        border-color: var(--accent-blue, #0052cc);
        background-color: #ffffff;
        color: var(--accent-blue, #0052cc);
        box-shadow: 0 0 0 4px rgba(0, 82, 204, 0.15);
    }

    .fase-card {
        background-color: var(--canvas-card, #ffffff);
        border: 1px solid var(--line-subtle, #eaeaea);
        padding: 32px;
        border-radius: 8px;
        transition: all 0.2s ease;
        text-align: left;
    }

    .fase-item.atual .fase-card {
        border-color: var(--accent-blue, #0052cc);
    }

    .fase-badge {
        display: inline-block;
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding: 4px 8px;
        border-radius: 4px;
        margin-bottom: 12px;
    }

    .badge-concluida { background-color: #f5f5f7; color: #555555; }
    .badge-atual { background-color: #ebf8ff; color: #0052cc; }
    .badge-bloqueada { background-color: #f7fafc; color: #a0aec0; }

    .fase-titulo {
        font-size: 1.4rem;
        font-weight: 700;
        margin: 0 0 8px 0;
        letter-spacing: -0.5px;
    }

    .fase-desc {
        color: var(--ink-secondary, #555555);
        font-size: 0.95rem;
        line-height: 1.6;
        margin: 0 0 20px 0;
    }

    .fase-progresso-bar {
        height: 6px;
        background-color: #eaeaea;
        border-radius: 3px;
        overflow: hidden;
    }

    .fase-progresso-check {
        height: 100%;
        background-color: #0052cc;
        width: 0%;
        transition: width 0.4s ease;
    }
</style>

<div class="minimal-wrapper">
    <!-- Bloco de Introdução -->
    <section class="hero-container" style="padding: 100px 24px 40px 24px;">
        <span class="hero-eyebrow">Evolução</span>
        <h1 class="hero-headline" style="font-size: 3rem; margin-bottom: 16px;">Minha Jornada</h1>
        <p class="hero-subheading" style="margin-bottom: 0;">Visualize o seu progresso estruturado, cumpra metas e suba de nível na plataforma.</p>
    </section>

    <!-- Linha do Tempo de Fases -->
    <section class="jornada-timeline">
        
        <!-- Fase 1: Concluída -->
        <div class="fase-item concluida">
            <div class="fase-indicador">✓</div>
            <div class="fase-card">
                <span class="fase-badge badge-concluida">Fase 01 // Concluída</span>
                <h3 class="fase-titulo">Fundamentos e Setup</h3>
                <p class="fase-desc">Alinhamento estrutural, configuração do repositório remoto, deploy inicial e entendimento pleno do padrão arquitetural MVC nativo.</p>
                <div class="fase-progresso-bar">
                    <div class="fase-progresso-check" style="width: 100%; background-color: #111111;"></div>
                </div>
            </div>
        </div>

        <!-- Fase 2: Em Progresso -->
        <div class="fase-item atual">
            <div class="fase-indicador">2</div>
            <div class="fase-card">
                <span class="fase-badge badge-atual">Fase 02 // Em Progresso</span>
                <h3 class="fase-titulo">Desenvolvimento de Funcionalidades</h3>
                <p class="fase-desc">Construção ativa das views do portal do aluno, estruturação dos métodos dinâmicos dentro dos controladores e controle fino de rotas amigáveis.</p>
                <div class="fase-progresso-bar">
                    <div class="fase-progresso-check" style="width: 40%;"></div>
                </div>
            </div>
        </div>

        <!-- Fase 3: Bloqueada -->
        <div class="fase-item">
            <div class="fase-indicador">3</div>
            <div class="fase-card" style="opacity: 0.6;">
                <span class="fase-badge badge-bloqueada">Fase 03 // Bloqueada</span>
                <h3 class="fase-titulo">Integração com Banco de Dados</h3>
                <p class="fase-desc">Criação de modelos dinâmicos orientados a objetos, persistência de dados de login, manipulação segura de sessões e listagem dinâmica de conquistas.</p>
            </div>
        </div>

    </section>
</div>

<?php
require_once __DIR__ . '/components/footer.php';
?>
