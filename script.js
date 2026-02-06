document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок
    lucide.createIcons();

    // 2. Регистрация плагинов (только для оставшихся секций)
    gsap.registerPlugin(ScrollTrigger);

    // --- МОБИЛЬНОЕ МЕНЮ ---
    const burger = document.querySelector('.burger');
    const mobileNav = document.querySelector('.mobile-nav');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    if (burger) {
        const toggleMenu = () => {
            burger.classList.toggle('active');
            mobileNav.classList.toggle('active');
            document.body.style.overflow = mobileNav.classList.contains('active') ? 'hidden' : '';
        };
        burger.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));
    }

    // --- ХЕДЕР: ЭФФЕКТ СКРОЛЛА ---
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('header--scrolled', window.scrollY > 50);
    });

    // --- HERO: ПЕРЕКЛЮЧАТЕЛЬ СЛОВ (Оставляем GSAP) ---
    const words = ["инноваций", "результатов", "прогресса", "будущего"];
    let currentIndex = 0;
    const wordElement = document.querySelector('.word-switcher');

    if (wordElement) {
        setInterval(() => {
            gsap.to(wordElement, {
                y: -20, opacity: 0, duration: 0.5,
                onComplete: () => {
                    currentIndex = (currentIndex + 1) % words.length;
                    wordElement.textContent = words[currentIndex];
                    gsap.fromTo(wordElement, { y: 20, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5 });
                }
            });
        }, 3000);
    }

    // --- СЕКЦИЯ «ПОДХОД» (Оставляем GSAP по твоему желанию) ---
    gsap.utils.toArray('.approach-card').forEach((card, i) => {
        gsap.from(card, {
            scrollTrigger: { trigger: card, start: "top 90%" },
            opacity: 0, y: 50, duration: 0.8, delay: i * 0.1, ease: "power2.out"
        });
    });

    // --- СЕКЦИЯ «ИНСАЙТЫ» (Оставляем GSAP) ---
    gsap.utils.toArray('.bento-item').forEach((item, i) => {
        gsap.from(item, {
            scrollTrigger: { trigger: item, start: "top 90%" },
            opacity: 0, scale: 0.95, y: 30, duration: 0.8, delay: i * 0.15, ease: "power3.out"
        });
    });

    // --- СЕКЦИЯ «ЭКСПЕРТИЗА» (Чистый JS без GSAP) ---
    const tabs = document.querySelectorAll('.expertise__tab');
    const panes = document.querySelectorAll('.expertise__pane');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.getAttribute('data-target');
            if(tab.classList.contains('active')) return;

            // Переключение активного класса у кнопок
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            // Переключение видимости панелей
            panes.forEach(pane => {
                if (pane.id === target) {
                    pane.classList.add('active');
                } else {
                    pane.classList.remove('active');
                }
            });
        });
    });

    // --- СЕКЦИЯ «ОТЗЫВЫ» (Без анимаций GSAP) ---
    // Здесь теперь ничего не происходит — карточки просто отображаются согласно CSS.

    // --- КОНТАКТНАЯ ФОРМА ---
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        const formMessage = document.getElementById('form-message');
        const captchaLabel = document.getElementById('captcha-label');
        const captchaInput = document.getElementById('captcha-input');
        
        let num1 = Math.floor(Math.random() * 10) + 1;
        let num2 = Math.floor(Math.random() * 10) + 1;
        let captchaResult = num1 + num2;
        if(captchaLabel) captchaLabel.textContent = `Сколько будет ${num1} + ${num2}?`;

        const phoneInput = document.getElementById('phone');
        if(phoneInput) {
            phoneInput.addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/[^0-9]/g, '');
            });
        }

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            if (parseInt(captchaInput.value) !== captchaResult) {
                formMessage.textContent = 'Ошибка! Неправильный ответ на капчу.';
                formMessage.className = 'form-message error';
                return;
            }

            const btn = contactForm.querySelector('.btn--submit');
            btn.disabled = true;
            btn.textContent = 'Отправка...';

            setTimeout(() => {
                formMessage.textContent = 'Спасибо! Заявка принята. Ожидайте звонка эксперта.';
                formMessage.className = 'form-message success';
                contactForm.reset();
                btn.disabled = false;
                btn.innerHTML = '<span>Запросить доступ</span> <i data-lucide="send"></i>';
                lucide.createIcons();
            }, 1500);
        });
    }

    // --- COOKIE POPUP ---
    const cookiePopup = document.getElementById('cookie-popup');
    const acceptBtn = document.getElementById('accept-cookies');

    if (cookiePopup && !localStorage.getItem('cookies-accepted')) {
        setTimeout(() => cookiePopup.classList.add('active'), 2000);
    }

    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            localStorage.setItem('cookies-accepted', 'true');
            cookiePopup.classList.remove('active');
        });
    }
});