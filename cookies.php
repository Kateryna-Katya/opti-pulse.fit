<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Инновационный консалтинг и стратегии роста</title>
    
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><path d='M10 50 L30 50 L40 20 L60 80 L70 50 L90 50' fill='none' stroke='%23D4FF00' stroke-width='8' stroke-linecap='round' stroke-linejoin='round'/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#approach" class="nav__link">Подход</a></li>
                    <li><a href="./#insights" class="nav__link">Инсайты</a></li>
                    <li><a href="./#expertise" class="nav__link">Экспертиза</a></li>
                    <li><a href="./#reviews" class="nav__link">Отзывы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">
                <span>Связаться</span>
                <i data-lucide="arrow-up-right"></i>
            </a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag">Юридическая документация</span>
            <h1>Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии.
                </p>

                <h2>Что такое файлы cookie?</h2>
                <p>
                    Файл cookie — это небольшой фрагмент данных (текстовый файл),
                    который веб-сайт сохраняет на вашем устройстве (компьютере, планшете
                    или смартфоне), когда вы его посещаете. Это позволяет платформе 
                    <strong><?= $domainTitle ?></strong> «помнить» ваши действия и предпочтения 
                    (например, язык, настройки региона Италия и другие параметры) 
                    в течение определенного времени.
                </p>

                <h2>Какие типы файлов cookie мы используем?</h2>
                <p>
                    Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                    следующим категориям:
                </p>
                <ul class="legal-list">
                    <li>
                        <strong>Строго необходимые:</strong> Критически важны для функционирования. Позволяют перемещаться по страницам <strong><?= $domainTitle ?></strong> и использовать его защищенные разделы.
                    </li>
                    <li>
                        <strong>Аналитические:</strong> Сбор анонимной информации о том, как посетители используют наш сайт, для улучшения консалтинговых материалов.
                    </li>
                    <li>
                        <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта в рамках бизнес-аналитики.
                    </li>
                    <li>
                        <strong>Маркетинговые:</strong> Используются для доставки предложений, соответствующих вашим интересам в сфере инноваций.
                    </li>
                </ul>

                <h2>Зачем мы используем файлы cookie?</h2>
                <ul class="legal-list">
                    <li>Обеспечение стабильной и безопасной работы платформы.</li>
                    <li>Анализ пользовательского поведения для оптимизации стратегий роста.</li>
                    <li>Персонализация контента для пользователей в Италии и других странах ЕС.</li>
                    <li>Предоставление релевантных маркетинговых материалов по теме консалтинга.</li>
                </ul>

                <h2>Ваш выбор и управление</h2>
                <p>
                    Вы имеете полный контроль над файлами cookie. Вы можете в любой
                    момент изменить свои настройки в браузере. Однако, обратите
                    внимание: отключение строго необходимых cookie может привести к
                    некорректной работе некоторых функций сайта.
                </p>

                <h2>Файлы cookie третьих сторон</h2>
                <p>
                    На некоторых страницах мы используем внешние сервисы, такие как Google Analytics или инструменты визуализации данных. Мы рекомендуем ознакомиться с их политиками конфиденциальности для полной информации.
                </p>

                <div class="contact-info-block">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <ul class="contact-data">
                        <li><strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+390697637569">+39 06 9763 7569</a></li>
                        <li><strong>Адрес:</strong> Via della Conciliazione, 4, 00193 Roma RM, Italy</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__dot"></span>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">
                    Технологии нового поколения для трансформации вашего бизнеса и личной эффективности. Платформа года по версии независимых экспертов ЕС.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#hero" class="footer__link">Главная</a></li>
                    <li><a href="./#approach" class="footer__link">Наш подход</a></li>
                    <li><a href="./#insights" class="footer__link">Блог и инсайты</a></li>
                    <li><a href="./#expertise" class="footer__link">Услуги</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php" class="footer__link">Privacy Policy</a></li>
                    <li><a href="./cookies.php" class="footer__link">Cookie Policy</a></li>
                    <li><a href="./terms.php" class="footer__link">Terms of Use</a></li>
                    <li><a href="./return.php" class="footer__link">Return Policy</a></li>
                    <li><a href="./disclaimer.php" class="footer__link">Disclaimer</a></li>
                    <li><a href="./contact.php" class="footer__link">Contacts</a></li>
                    <li><a href="./personal-data-policy.php" class="footer__link">Personal Data</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+390697637569">+39 06 9763 7569</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>Via della Conciliazione, 4, 00193 Roma RM, Italy</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026 <?= $fullDomain ?>. Все права защищены. Решения, которые меняют правила игры.</p>
        </div>
    </footer>
    <div id="cookie-popup" class="cookie-popup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button id="accept-cookies" class="btn btn--primary">Принять</button>
        </div>
    </div>
    
    <div class="mobile-nav">
        <div class="mobile-nav__content">
            <ul class="mobile-nav__list">
                <li><a href="./#hero" class="mobile-nav__link">Главная</a></li>
                <li><a href="./#approach" class="mobile-nav__link">Подход</a></li>
                <li><a href="./#insights" class="mobile-nav__link">Инсайты</a></li>
                <li><a href="./#expertise" class="mobile-nav__link">Экспертиза</a></li>
                <li><a href="./#reviews" class="mobile-nav__link">Отзывы</a></li>
                <li><a href="./#contact" class="mobile-nav__link btn btn--primary">Связаться</a></li>
            </ul>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>
</html>