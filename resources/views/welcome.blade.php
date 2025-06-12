
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IvASoft — IT-решения любой сложности</title>
    <meta name="description" content="IvASoft - команда экспертов в IT-разработке. Разработка ПО, мобильных и веб-приложений, AI, Big Data.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-blue-600">IvASoft</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-900 hover:text-blue-600">Главная</a>
                    <a href="#about" class="text-gray-900 hover:text-blue-600">О нас</a>
                    <a href="#services" class="text-gray-900 hover:text-blue-600">Услуги</a>
                    <a href="#portfolio" class="text-gray-900 hover:text-blue-600">Портфолио</a>
                    <a href="#contact" class="text-gray-900 hover:text-blue-600">Контакты</a>
                </div>
                <button class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">
                IvASoft — IT-решения любой сложности
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                Команда экспертов в разработке программного обеспечения, мобильных и веб-приложений, AI и Big Data
            </p>
            <a href="#contact" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition duration-300">
                Связаться с нами
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">О нас</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    IvASoft — это команда профессиональных разработчиков, которая создает инновационные IT-решения для бизнеса любого масштаба
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Наша миссия</h3>
                    <p class="text-gray-600 mb-6">
                        Мы стремимся предоставлять качественные IT-решения, которые помогают нашим клиентам достигать своих бизнес-целей и оставаться конкурентоспособными в цифровую эпоху.
                    </p>
                    <div class="space-y-4">
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
                <div class="bg-gray-100 p-8 rounded-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Наши компетенции</h3>
                    <p class="text-gray-600">
                        Более 5 лет опыта в разработке сложных IT-решений. Мы специализируемся на создании масштабируемых приложений, интеграции систем и внедрении современных технологий.
                    </p>
                </div>
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
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Разработка ПО</h3>
                    <p class="text-gray-600">Создание кастомного программного обеспечения под ваши бизнес-задачи</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Мобильные приложения</h3>
                    <p class="text-gray-600">Разработка iOS и Android приложений с современным UX/UI</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Веб-приложения</h3>
                    <p class="text-gray-600">Создание современных веб-платформ и корпоративных порталов</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
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
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300">
                    <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">E-commerce платформа</h3>
                        <p class="text-gray-600 mb-4">Создание современной платформы для онлайн-торговли с интеграцией платежных систем</p>
                        <span class="text-sm text-blue-600 font-semibold">Веб-разработка</span>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300">
                    <div class="h-48 bg-gradient-to-br from-orange-400 to-orange-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Мобильное приложение для фитнеса</h3>
                        <p class="text-gray-600 mb-4">iOS и Android приложение с трекингом активности и персональными тренировками</p>
                        <span class="text-sm text-blue-600 font-semibold">Мобильная разработка</span>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300">
                    <div class="h-48 bg-gradient-to-br from-green-400 to-green-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">CRM система</h3>
                        <p class="text-gray-600 mb-4">Корпоративная система управления клиентами с аналитикой и отчетностью</p>
                        <span class="text-sm text-blue-600 font-semibold">Корпоративное ПО</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Свяжитесь с нами</h2>
                <p class="text-xl text-gray-600">Готовы обсудить ваш проект</p>
            </div>
            <div class="grid lg:grid-cols-2 gap-12">
                <div>
                    <form class="space-y-6" method="POST" action="/contact">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Имя</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Тема</label>
                            <input type="text" id="subject" name="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Описание проекта</label>
                            <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300">
                            Отправить сообщение
                        </button>
                    </form>
                </div>
                <div class="space-y-8">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Контактная информация</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <a href="mailto:egorolegovich2007555@gmail.com" class="text-gray-700 hover:text-blue-600">egorolegovich2007555@gmail.com</a>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <a href="tel:+79785197472" class="text-gray-700 hover:text-blue-600">+7 (978) 519-74-72</a>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                                </svg>
                                <a href="https://t.me/ivasoft" class="text-gray-700 hover:text-blue-600">@ivasoft</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Режим работы</h3>
                        <p class="text-gray-600">Понедельник - Пятница: 9:00 - 18:00</p>
                        <p class="text-gray-600">Суббота - Воскресенье: По договоренности</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="text-2xl font-bold mb-4">IvASoft</div>
                <p class="text-gray-400 mb-6">IT-решения любой сложности</p>
                <div class="flex justify-center space-x-6">
                    <a href="mailto:egorolegovich2007555@gmail.com" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                    <a href="tel:+79785197472" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </a>
                    <a href="https://t.me/ivasoft" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                        </svg>
                    </a>
                </div>
                <div class="mt-8 pt-8 border-t border-gray-800 text-gray-400">
                    <p>&copy; 2025 IvASoft. Все права защищены.</p>
                </div>
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
