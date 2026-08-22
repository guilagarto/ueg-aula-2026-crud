<?php
// app/views/agenda.php
require_once __DIR__ . '/components/header.php';
?>

<div class="minimal-wrapper">
    <section class="hero-container" style="padding: 100px 24px 60px 24px;">
        <span class="hero-eyebrow">Cronograma</span>
        <h1 class="hero-headline" style="font-size: 3rem; margin-bottom: 16px;">Sua Agenda de Atividades</h1>
        <p class="hero-subheading" style="margin-bottom: 0;">Organize seus compromissos, prazos e entregas da sua jornada de evolução.</p>
    </section>

    <!-- Estrutura de Lista Minimalista de Eventos -->
    <section class="showcase-section" style="padding: 40px 24px 100px 24px;">
        <div class="showcase-grid" style="grid-template-columns: 1fr; max-width: 800px; margin: 0 auto; gap: 16px;">
            
            <!-- Item da Agenda 1 -->
            <div class="showcase-card" style="padding: 30px; display: flex; justify-content: space-between; align-items: center; text-align: left;">
                <div>
                    <span class="section-label" style="margin-bottom: 4px; color: var(--accent-gold);">25 AGOST, 2026 // 19:00</span>
                    <h3 class="card-headline" style="margin-bottom: 8px; font-size: 1.4rem;">Mentoria Estratégica Individual</h3>
                    <p class="card-body-text" style="margin: 0;">Alinhamento de metas da semana e revisão do plano de ação.</p>
                </div>
                <span style="font-size: 1.5rem; color: var(--line-subtle);">➔</span>
            </div>

            <!-- Item da Agenda 2 -->
            <div class="showcase-card" style="padding: 30px; display: flex; justify-content: space-between; align-items: center; text-align: left;">
                <div>
                    <span class="section-label" style="margin-bottom: 4px; color: var(--ink-muted);">29 AGOST, 2026 // 23:59</span>
                    <h3 class="card-headline" style="margin-bottom: 8px; font-size: 1.4rem;">Prazo Final: Entrega do MVP</h3>
                    <p class="card-body-text" style="margin: 0;">Envio do link do repositório estruturado e configurado em produção.</p>
                </div>
                <span style="font-size: 1.5rem; color: var(--line-subtle);">⚠️</span>
            </div>

        </div>
    </section>
</div>

<?php
require_once __DIR__ . '/components/footer.php';
?>
