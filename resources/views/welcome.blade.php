<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IvASoft - IT-решения любой сложности</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .card-hover:hover { transform: translateY(-5px); transition: transform 0.3s ease; }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-blue-600">IvASoft</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-blue-600">Главная</a>
                    <a href="#about" class="text-gray-700 hover:text-blue-600">О нас</a>
                    <a href="#services" class="text-gray-700 hover:text-blue-600">Услуги</a>
                    <a href="#portfolio" class="text-gray-700 hover:text-blue-600">Портфолио</a>
                    <a href="#contact" class="text-gray-700 hover:text-blue-600">Контакты</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-bg text-white pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">IvASoft — IT-решения любой сложности</h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">Создаем программное обеспечение, которое работает</p>
                <a href="#contact" class="bg-white text-blue-600 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-blue-50 transition duration-300">Связаться с нами</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">О нас</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">IvASoft — команда экспертов в области IT-разработки с многолетним опытом создания инновационных решений</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Наша миссия</h3>
                    <p class="text-gray-600 mb-6">Мы помогаем бизнесу достигать новых высот с помощью современных технологий и индивидуального подхода к каждому проекту.</p>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-blue-600 rounded-full mr-3"></div>
                            <span class="text-gray-700">Разработка программного обеспечения</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-blue-600 rounded-full mr-3"></div>
                            <span class="text-gray-700">Мобильные и веб-приложения</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-blue-600 rounded-full mr-3"></div>
                            <span class="text-gray-700">Искусственный интеллект</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 bg-blue-600 rounded-full mr-3"></div>
                            <span class="text-gray-700">Big Data решения</span>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 h-64 rounded-lg"></div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Наши услуги</h2>
                <p class="text-xl text-gray-600">Полный спектр IT-услуг для вашего бизнеса</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm card-hover">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Разработка ПО</h3>
                    <p class="text-gray-600">Создание надежного программного обеспечения под ваши задачи</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm card-hover">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Мобильные приложения</h3>
                    <p class="text-gray-600">Разработка приложений для Android и iOS платформ</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm card-hover">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Веб-приложения</h3>
                    <p class="text-gray-600">Создание современных веб-платформ и корпоративных порталов</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm card-hover">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">AI & Big Data</h3>
                    <p class="text-gray-600">Внедрение искусственного интеллекта и анализ больших данных</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Портфолио</h2>
                <p class="text-xl text-gray-600">Примеры наших успешных проектов</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-sm card-hover">
                    <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">E-commerce платформа</h3>
                        <p class="text-gray-600 mb-4">Создание современной платформы для онлайн-торговли с интеграцией платежных систем</p>
                        <span class="text-sm text-blue-600 font-semibold">Веб-разработка</span>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-sm card-hover">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-green-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Мобильное приложение</h3>
                        <p class="text-gray-600 mb-4">Разработка мобильного приложения для управления финансами</p>
                        <span class="text-sm text-green-600 font-semibold">Мобильная разработка</span>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-sm card-hover">
                    <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">AI-система</h3>
                        <p class="text-gray-600 mb-4">Внедрение системы машинного обучения для анализа данных</p>
                        <span class="text-sm text-purple-600 font-semibold">Искусственный интеллект</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Контакты</h2>
                <p class="text-xl text-gray-600">Свяжитесь с нами для обсуждения вашего проекта</p>
            </div>
            <div class="grid lg:grid-cols-2 gap-12">
                <div>
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Имя</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Тема</label>
                            <input type="text" name="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Описание проекта</label>
                            <textarea name="message" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">Отправить сообщение</button>
                    </form>
                </div>
                <div class="space-y-8">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Наши контакты</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span class="text-gray-700">contact@ivasoft.com</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span class="text-gray-700">+7 (XXX) XXX-XX-XX</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-.962 6.502-.378 1.73-.766 2.264-1.234 2.264-.696.054-1.142-.493-1.777-.967-.635-.474-2.055-1.26-2.882-1.915a.89.89 0 0 1-.123-.979c.059-.077.35-.372 2.86-2.629a.454.454 0 0 0-.166-.755c-.084-.036-.175-.015-.29.05l-3.794 2.394a.73.73 0 0 1-.682.058l-2.263-.726c-.35-.11-.356-.35.082-.532.376-.156 10.11-3.931 10.11-3.931s.376-.149.597-.07z"/>
                                </svg>
                                <span class="text-gray-700">@ivasoft_support</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="text-2xl font-bold text-blue-400 mb-4">IvASoft</div>
                <p class="text-gray-400 mb-4">IT-решения любой сложности</p>
                <p class="text-gray-500">&copy; 2025 IvASoft. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>