<!DOCTYPE html>
<html lang="ru" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IvASoft — IT-решения любой сложности</title>
    <meta name="description" content="IvASoft - команда экспертов в IT-разработке. Разработка ПО, мобильных и веб-приложений, AI/Big Data решения.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        .hero { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; min-height: 100vh; display: flex; align-items: center; }
        .btn { display: inline-block; padding: 12px 24px; background: #ff6b6b; color: white; text-decoration: none; border-radius: 5px; transition: all 0.3s; }
        .btn:hover { background: #ee5a52; transform: translateY(-2px); }
        .section { padding: 80px 0; }
        .grid { display: grid; gap: 40px; }
        .grid-2 { grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); }
        .grid-3 { grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); }
        .card { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); transition: transform 0.3s; }
        .card:hover { transform: translateY(-5px); }
        h1 { font-size: 3.5rem; font-weight: 700; margin-bottom: 20px; }
        h2 { font-size: 2.5rem; font-weight: 600; margin-bottom: 40px; text-align: center; }
        h3 { font-size: 1.5rem; font-weight: 600; margin-bottom: 15px; color: #667eea; }
        .nav { position: fixed; top: 0; width: 100%; background: rgba(255,255,255,0.95); backdrop-filter: blur(10px); z-index: 1000; padding: 15px 0; }
        .nav-container { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-weight: 700; font-size: 1.5rem; color: #667eea; }
        .nav-links { display: flex; gap: 30px; list-style: none; }
        .nav-links a { text-decoration: none; color: #333; font-weight: 500; transition: color 0.3s; }
        .nav-links a:hover { color: #667eea; }
        .project { background: #f8f9fa; padding: 20px; border-radius: 8px; margin-bottom: 20px; }
        .project img { width: 100%; height: 200px; object-fit: cover; border-radius: 5px; margin-bottom: 15px; }
        footer { background: #2c3e50; color: white; padding: 40px 0; text-align: center; }
        .contact-form { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: 500; }
        .form-group input, .form-group textarea { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; }
        .form-group textarea { height: 120px; resize: vertical; }
        @media (max-width: 768px) {
            h1 { font-size: 2.5rem; }
            h2 { font-size: 2rem; }
            .nav-links { display: none; }
            .hero { text-align: center; }
        }
    </style>
</head>
<body class="h-full">
    <!-- Навигация -->
    <nav class="nav">
        <div class="container">
            <div class="nav-container">
                <div class="logo">IvASoft</div>
                <ul class="nav-links">
                    <li><a href="#hero">Главная</a></li>
                    <li><a href="#about">О нас</a></li>
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#portfolio">Портфолио</a></li>
                    <li><a href="#contact">Контакты</a></li>
                    @auth
                        <li><a href="/admin">Админ панель</a></li>
                    @else
                        <li><a href="/admin/login">Вход</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Главный экран -->
    <section id="hero" class="hero">
        <div class="container">
            <div style="max-width: 600px;">
                <h1>IvASoft — IT-решения любой сложности</h1>
                <p style="font-size: 1.3rem; margin-bottom: 30px; opacity: 0.9;">
                    Команда экспертов в области разработки программного обеспечения, 
                    мобильных и веб-приложений, AI и Big Data решений
                </p>
                <a href="#contact" class="btn" style="font-size: 1.1rem; padding: 15px 30px;">
                    Связаться с нами
                </a>
            </div>
        </div>
    </section>

    <!-- О нас -->
    <section id="about" class="section">
        <div class="container">
            <h2>О нас</h2>
            <div class="grid grid-2">
                <div>
                    <h3>Наша миссия</h3>
                    <p>IvASoft - это команда опытных разработчиков, которая создает инновационные IT-решения для бизнеса любого масштаба. Мы верим в силу технологий и их способность трансформировать бизнес-процессы.</p>
                </div>
                <div>
                    <h3>Наши компетенции</h3>
                    <ul style="list-style: none; padding-left: 0;">
                        <li>✓ Разработка программного обеспечения</li>
                        <li>✓ Мобильные приложения (iOS, Android)</li>
                        <li>✓ Веб-приложения и сайты</li>
                        <li>✓ Искусственный интеллект (AI)</li>
                        <li>✓ Анализ больших данных (Big Data)</li>
                        <li>✓ Техническая поддержка</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Услуги -->
    <section id="services" class="section" style="background: #f8f9fa;">
        <div class="container">
            <h2>Наши услуги</h2>
            <div class="grid grid-3">
                <div class="card">
                    <h3>Разработка ПО</h3>
                    <p>Создаем программное обеспечение под ваши специфические потребности с использованием современных технологий и лучших практик разработки.</p>
                </div>
                <div class="card">
                    <h3>Мобильные приложения</h3>
                    <p>Разрабатываем нативные и кроссплатформенные мобильные приложения для iOS и Android с интуитивным интерфейсом.</p>
                </div>
                <div class="card">
                    <h3>Веб-приложения</h3>
                    <p>Создаем современные веб-приложения и сайты с адаптивным дизайном и высокой производительностью.</p>
                </div>
                <div class="card">
                    <h3>AI решения</h3>
                    <p>Внедряем искусственный интеллект в ваш бизнес: машинное обучение, нейронные сети, обработка естественного языка.</p>
                </div>
                <div class="card">
                    <h3>Big Data</h3>
                    <p>Помогаем собирать, обрабатывать и анализировать большие объемы данных для принятия обоснованных бизнес-решений.</p>
                </div>
                <div class="card">
                    <h3>Техподдержка</h3>
                    <p>Обеспечиваем круглосуточную техническую поддержку и сопровождение ваших IT-систем.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Портфолио -->
    <section id="portfolio" class="section">
        <div class="container">
            <h2>Портфолио</h2>
            <div class="grid grid-2">
                <div class="project">
                    <div style="width: 100%; height: 200px; background: linear-gradient(45deg, #667eea, #764ba2); border-radius: 5px; margin-bottom: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem;">
                        E-commerce платформа
                    </div>
                    <h3>Интернет-магазин премиум класса</h3>
                    <p>Разработали полнофункциональную e-commerce платформу с системой управления заказами, интеграцией платежных систем и CRM.</p>
                </div>
                <div class="project">
                    <div style="width: 100%; height: 200px; background: linear-gradient(45deg, #ff6b6b, #ee5a52); border-radius: 5px; margin-bottom: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem;">
                        Мобильное приложение
                    </div>
                    <h3>Фитнес-трекер с AI</h3>
                    <p>Создали мобильное приложение для отслеживания физической активности с элементами искусственного интеллекта для персонализированных рекомендаций.</p>
                </div>
                <div class="project">
                    <div style="width: 100%; height: 200px; background: linear-gradient(45deg, #4ecdc4, #44a08d); border-radius: 5px; margin-bottom: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem;">
                        Big Data система
                    </div>
                    <h3>Система аналитики данных</h3>
                    <p>Построили комплексную систему для сбора и анализа больших данных с визуализацией метрик в реальном времени.</p>
                </div>
                <div class="project">
                    <div style="width: 100%; height: 200px; background: linear-gradient(45deg, #f093fb, #f5576c); border-radius: 5px; margin-bottom: 15px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.2rem;">
                        Веб-платформа
                    </div>
                    <h3>Корпоративный портал</h3>
                    <p>Разработали внутренний корпоративный портал с системой документооборота и интеграцией с внешними сервисами.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Контакты -->
    <section id="contact" class="section" style="background: #f8f9fa;">
        <div class="container">
            <h2>Контакты</h2>
            <div class="grid grid-2">
                <div>
                    <h3>Свяжитесь с нами</h3>
                    <p style="margin-bottom: 30px;">Готовы обсудить ваш проект? Оставьте заявку, и мы свяжемся с вами в ближайшее время.</p>

                    <div style="margin-bottom: 20px;">
                        <strong>Телефон:</strong> +7 (999) 123-45-67
                    </div>
                    <div style="margin-bottom: 20px;">
                        <strong>Email:</strong> info@ivasoft.ru
                    </div>
                    <div style="margin-bottom: 20px;">
                        <strong>Адрес:</strong> г. Москва, ул. Тверская, д. 1, офис 100
                    </div>
                    <div>
                        <strong>Время работы:</strong> Пн-Пт 9:00-18:00
                    </div>
                </div>
                <div>
                    <form action="/contact" method="POST" class="contact-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">Ваше имя *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Телефон</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="service">Интересующая услуга</label>
                            <select id="service" name="service" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                                <option value="">Выберите услугу</option>
                                <option value="software">Разработка ПО</option>
                                <option value="mobile">Мобильные приложения</option>
                                <option value="web">Веб-приложения</option>
                                <option value="ai">AI решения</option>
                                <option value="bigdata">Big Data</option>
                                <option value="support">Техподдержка</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение *</label>
                            <textarea id="message" name="message" placeholder="Расскажите о вашем проекте..." required></textarea>
                        </div>
                        <button type="submit" class="btn" style="width: 100%; background: #667eea;">Отправить заявку</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Футер -->
    <footer>
        <div class="container">
            <div class="grid grid-3" style="text-align: left; margin-bottom: 30px;">
                <div>
                    <h3 style="color: white; margin-bottom: 15px;">IvASoft</h3>
                    <p>IT-решения любой сложности для вашего бизнеса</p>
                </div>
                <div>
                    <h3 style="color: white; margin-bottom: 15px;">Услуги</h3>
                    <ul style="list-style: none;">
                        <li>Разработка ПО</li>
                        <li>Мобильные приложения</li>
                        <li>Веб-приложения</li>
                        <li>AI и Big Data</li>
                    </ul>
                </div>
                <div>
                    <h3 style="color: white; margin-bottom: 15px;">Контакты</h3>
                    <p>info@ivasoft.ru<br>+7 (999) 123-45-67</p>
                </div>
            </div>
            <div style="border-top: 1px solid #34495e; padding-top: 20px;">
                <p>&copy; 2025 IvASoft. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script>
        // Плавная прокрутка для навигации
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Показ уведомлений
        @if(session('success'))
            alert('{{ session('success') }}');
        @endif
        @if(session('error'))
            alert('{{ session('error') }}');
        @endif
    </script>
</body>
</html>