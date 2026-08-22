<?php
// 1. Importa o cabeçalho do site (onde fica o menu, CSS e o topo)
require_once __DIR__ . '/components/header.php';
?>

<!-- 2. Conteúdo exclusivo da Página Inicial -->
<main class="container">
    <section class="hero-section">
        <h1>🏠 Bem-vindo à Página Inicial</h1>
        <p>Este é o modelo estruturado do seu novo site rodando no XAMPP de forma moderna.</p>
    </section>

    <section class="features">
        <div class="card">
            <h3>Projeto aula UEG</h3>
            <p>CRIAR UM SITE FUNCIONAL COM xammp</p>
        </div>
        
        <div class="card">
            <h3>Guilherme VInicius LIma/h3>
            <p>Projeto </p>
        </div>
    </section>

    <!-- Exemplo de link usando a rota configurada -->
    <p>Quer saber mais? <a href="sobre" class="btn">Visite a página Sobre Nós</a></p>
</main>

<?php
// 3. Importa o rodapé do site (onde ficam os scripts JS e as tags de fechamento)
require_once __DIR__ . '/components/footer.php';
?>