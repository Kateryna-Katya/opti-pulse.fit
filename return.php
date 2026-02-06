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
            <span class="section-tag">Payment & Refunds</span>
            <h1>Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent">
                    <p>
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, 
                        основанная на качестве предоставляемых услуг и защите прав потребителей в рамках законодательства ЕС.
                    </p>
                </div>

                <h2>Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card">
                        <div class="refund-card__icon"><i data-lucide="file-text"></i></div>
                        <h3>Несоответствие услуге</h3>
                        <p>Если содержание консультации или отчета существенно отличается от заявленного на <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card">
                        <div class="refund-card__icon"><i data-lucide="settings"></i></div>
                        <h3>Технические сбои</h3>
                        <p>Критические ошибки на платформе <strong><?= $fullDomain ?></strong>, препятствующие получению оплаченных данных.</p>
                    </div>
                    <div class="refund-card">
                        <div class="refund-card__icon"><i data-lucide="shield-check"></i></div>
                        <h3>Право на отмену</h3>
                        <p>Отказ от услуги в течение 14 дней с момента оплаты, если консалтинговая сессия еще не была проведена.</p>
                    </div>
                </div>

                <div class="procedure-block">
                    <h2>Процедура запроса на возврат</h2>
                    <p>Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-mini">
                        <div class="step-mini"><span>1</span> Письмо на <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a></div>
                        <div class="step-mini"><span>2</span> Тема письма: «Запрос на возврат средств»</div>
                        <div class="step-mini"><span>3</span> Данные: ФИО, Email и детали транзакции</div>
                        <div class="step-mini"><span>4</span> Описание причины запроса (для улучшения качества сервиса)</div>
                    </div>
                </div>

                <h2>Сроки и способ возврата</h2>
                <p>
                    После одобрения вашего запроса, возврат денежных средств будет
                    произведен в течение <strong>7–14 рабочих дней</strong>. Средства возвращаются
                    тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                    зависит от регламента вашего банка в <strong>Италии</strong> или стране вашего пребывания.
                </p>

                <div class="warning-block">
                    <h2>Исключения и ограничения</h2>
                    <ul class="legal-list">
                        <li>Запрос подан по истечении 14 календарных дней с момента совершения платежа.</li>
                        <li>Услуга была оказана в полном объеме (консультация проведена, отчет предоставлен).</li>
                        <li>Технические проблемы вызваны оборудованием или интернет-соединением пользователя.</li>
                        <li>Нарушение правил использования платформы <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy">
                    <h2>Служба поддержки</h2>
                    <p>По всем финансовым вопросам обращайтесь в наш департамент поддержки:</p>
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