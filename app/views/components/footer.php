    <!-- 🎨 ESTILIZAÇÃO DO RODAPÉ MINIMALISTA GLOBAL -->
    <style>
        .global-footer {
            border-top: 1px solid #eaeaea;
            background-color: #ffffff;
            padding: 40px 24px;
            margin-top: 80px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #888888;
            font-size: 0.9rem;
        }
        .footer-links a {
            color: #555555;
            text-decoration: none;
            margin-left: 20px;
            transition: color 0.2s ease;
        }
        .footer-links a:hover {
            color: #111111;
        }
    </style>

    <footer class="global-footer">
        <div class="footer-container">
            <span>&copy; <?php echo date('Y'); ?> 8ou80 Soluções Digitais. Todos os direitos reservados.</span>
            <div class="footer-links">
                <a href="/proj-ueg-aula/public/home">Dashboard</a>
                <a href="/proj-ueg-aula/public/login">Sair da Conta</a>
            </div>
        </div>
    </footer>
</body>
</html>
