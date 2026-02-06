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
            <span class="section-tag">Privacy & Security</span>
            <h1>Политика обработки персональных данных</h1>

            <div class="legal-content">
                <div class="policy-intro">
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика обработки персональных данных (далее —
                        «Политика») определяет порядок и условия обработки персональных
                        данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                        устанавливает меры по обеспечению безопасности этих данных в соответствии с требованиями GDPR.
                    </p>
                    <p>
                        1.1. Важнейшей целью Оператора является соблюдение прав и свобод человека при обработке его персональных данных, включая защиту прав на неприкосновенность частной жизни и личную тайну.
                    </p>
                    <p>
                        1.2. Настоящая Политика применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="policy-section">
                    <h2>2. Основные понятия</h2>
                    <ul class="terminology-list">
                        <li><strong>Веб-сайт</strong> — совокупность графических и информационных материалов по адресу <strong><?= $fullDomain ?></strong>.</li>
                        <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                        <li><strong>Персональные данные</strong> — любая информация, относящаяся к определенному Пользователю.</li>
                        <li><strong>Обработка данных</strong> — сбор, систематизация, накопление и хранение данных.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid">
                        <div class="data-item">
                            <div class="data-item__icon"><i data-lucide="shield-check"></i></div>
                            <div>
                                <strong>Личные данные:</strong>
                                <span>ФИО, Email, номер телефона.</span>
                            </div>
                        </div>
                        <div class="data-item">
                            <div class="data-item__icon"><i data-lucide="monitor"></i></div>
                            <div>
                                <strong>Технические данные:</strong>
                                <span>Cookies, IP-адрес, данные о браузере.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section">
                    <h2>4. Цели обработки данных</h2>
                    <ul class="legal-list">
                        <li>Предоставление консультаций и экспертной поддержки.</li>
                        <li>Установление обратной связи и обработка заявок.</li>
                        <li>Анализ эффективности стратегий роста и инноваций.</li>
                        <li>Улучшение качества работы консалтинговой платформы.</li>
                    </ul>
                </div>

                <div class="policy-section">
                    <h2>5. Правовые основания</h2>
                    <p>Оператор обрабатывает персональные данные Пользователя только в случае их заполнения Пользователем самостоятельно через формы на сайте <strong><?= $fullDomain ?></strong> или при явном согласии с использованием файлов cookie.</p>
                </div>

                <div class="policy-section contact-footer-policy">
                    <h2>6. Вопросы и отзывы</h2>
                    <p>Если у вас возникли вопросы касательно безопасности ваших данных, вы можете направить запрос на адрес:</p>
                    <div class="policy-mail-box">
                        <i data-lucide="mail"></i>
                        <a href="mailto:support@<?= $fullDomain ?>" class="policy-mail">support@<?= $fullDomain ?></a>
                    </div>
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