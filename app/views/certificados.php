<?php
// app/views/certificados.php
require_once __DIR__ . '/components/header.php';
?>

<!-- 🎨 ESTILIZAÇÃO COMPLETA DA GRID DE CERTIFICADOS -->
<style>
    .certificados-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 24px 100px 24px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    }

    .grid-certificados {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 32px;
        margin-top: 40px;
    }

    .certificate-card {
        background-color: var(--canvas-card, #ffffff);
        border: 1px solid var(--line-subtle, #eaeaea);
        border-radius: 12px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: all 0.25s ease-out;
        text-align: left;
    }

    .certificate-card:hover {
        border-color: #b2b2b2;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        transform: translateY(-2px);
    }

    /* Representação visual minimalista do diploma/documento */
    .certificate-preview {
        height: 180px;
        background: linear-gradient(135deg, #f5f5f7 0%, #e2e8f0 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        border-bottom: 1px solid var(--line-subtle, #eaeaea);
        position: relative;
    }

    .certificate-badge-icon {
        background: #ffffff;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        font-size: 1.5rem;
    }

    .certificate-body {
        padding: 30px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .certificate-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin: 0 0 8px 0;
        letter-spacing: -0.3px;
        color: var(--ink-primary, #111111);
    }

    .certificate-meta {
        font-size: 0.8rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--accent-gold, #c5a059);
        margin-bottom: 16px;
        display: block;
    }

    .certificate-desc {
        color: var(--ink-secondary, #555555);
        font-size: 0.95rem;
        line-height: 1.5;
        margin: 0 0 24px 0;
    }

    .btn-download {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 12px;
        font-size: 0.9rem;
        font-weight: 600;
        background-color: var(--ink-primary, #111111);
        color: #ffffff;
        border-radius: 6px;
        text-decoration: none;
        transition: background-color 0.2s;
    }

    .btn-download:hover {
        background-color: #222222;
    }
</style>

<div class="minimal-wrapper">
    <!-- Bloco de Introdução -->
    <section class="hero-container" style="padding: 100px 24px 40px 24px; text-align: center;">
        <span class="hero-eyebrow">Conquistas Acadêmicas</span>
        <h1 class="hero-headline" style="font-size: 3rem; margin-bottom: 16px;">Meus Certificados</h1>
        <p class="hero-subheading" style="margin: 0 auto; max-width: 600px;">Valide suas competências concluídas. Baixe ou compartilhe suas certificações oficiais emitidas pela plataforma.</p>
    </section>

    <!-- Grid de Certificados -->
    <section class="certificados-section">
        <div class="grid-certificados">
            
            <!-- Certificado 1 -->
            <div class="certificate-card">
                <div class="certificate-preview">
                    <div class="certificate-badge-icon">🎓</div>
                </div>
                <div class="certificate-body">
                    <div>
                        <span class="certificate-meta">Concluído // 30 Horas</span>
                        <h3 class="certificate-title">Arquitetura MVC & Rotas</h3>
                        <p class="certificate-desc">Certificado de proficiência no desenvolvimento de sistemas modulares em PHP nativo utilizando padrões modernos de mercado.</p>
                    </div>
                    <a href="#" class="btn-download">
                        <span>Visualizar Documento</span> ➔
                    </a>
                </div>
            </div>

            <!-- Certificado 2 (Placeholder Bloqueado/Pendente) -->
            <div class="certificate-card" style="opacity: 0.5;">
                <div class="certificate-preview">
                    <div class="certificate-badge-icon">🔒</div>
                </div>
                <div class="certificate-body">
                    <div>
                        <span class="certificate-meta" style="color: #888888;">Em Progresso // 40 Horas</span>
                        <h3 class="certificate-title">Persistência e Segurança</h3>
                        <p class="certificate-desc">Este certificado ficará disponível assim que você concluir todas as lições da Fase 03 integrando o banco de dados.</p>
                    </div>
                    <a href="#" class="btn-download" style="background-color: #eaeaea; color: #888888; pointer-events: none;">
                        <span>Bloqueado</span>
                    </a>
                </div>
            </div>

        </div>
    </section>
</div>

<?php
require_once __DIR__ . '/components/footer.php';
?>
