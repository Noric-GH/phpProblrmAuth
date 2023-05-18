<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="/assets/main.css">

    <title> ФОТО СТУДИЯ + </title>
</head>

<body>

<?include 'header.php' ?>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <img src="/assets/images/bg__home.jpg" alt="" class="home__img">
            <div class="blur"></div>

            <div class="home__container container grid">
                <div class="home__data">
                    <h1 class="home__data-title"><b>ФОТО +</b></h1>
                    <p class="home__data-subtitle">Фотостудия в Королеве</p>
                    <a href="#" class="button">Записаться</a>

                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link link">
                        <i class='bx bxl-telegram'></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link link">
                        <i class='bx bxl-instagram-alt'></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link link">
                        <i class='bx bxl-vk'></i>
                    </a>
                </div>
            </div>

            <a class="hero-mouse anchor" href="#about">
                <div class="mouse-icon"><span></span></div>
            </a>

        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__img">
                    <div class="about__img-overlay">
                        <img src="/assets/images/about.jpg" alt="" class="about__img">
                    </div>
                </div>

                <div class="about__data">
                    <h5 class="section__subtitle">О нас</h5>
                    <h2 class="section__title about__title">Красота в деталях</h2>
                    <p class="about__description">Воссоздаем ваши самые смелые идеи в
                        ветмосферном стиле.
                        Наши фотографы - профессионалы с многолетним опытом. Мы организовываем!
                        Фотосессии разного вида и разного уровня сложности.
                    </p>

                    <div class="about__info-items grid">
                        <div class="about__info-item">
                            <h4 class="about__info-item_num">2008</h4>
                            <p class="about__info-item_description">Год основания студии</p>
                        </div>
                        <div class="about__info-item">
                            <h4 class="about__info-item_num">20</h4>
                            <p class="about__info-item_description">локаций для фотосессий</p>
                        </div>
                        <div class="about__info-item">
                            <h4 class="about__info-item_num">210</h4>
                            <p class="about__info-item_description">реализованных проектов</p>
                        </div>
                        <div class="about__info-item">
                            <h4 class="about__info-item_num">11</h4>
                            <p class="about__info-item_description">Професиональных фотографов</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== Portfolio ====================-->
        <section class="portfolio section container" id="portfolio">
            <h2 class="portfolio__title">
                Портфолио
            </h2>
            <div class="portfolio__image-content">
                <div class="carousel">
                    <img src="https://i.pinimg.com/564x/ab/57/76/ab57763c3a75f7c43463010bdc7e73c2.jpg" alt="img"
                        draggable="false">
                    <img src="https://i.pinimg.com/564x/e7/55/7c/e7557c05638338d02e0432cfa6ff9ddd.jpg" alt="img"
                        draggable="false">
                    <img src="https://i.pinimg.com/564x/91/e7/d7/91e7d791499a0c9bbf53b62ec6779b23.jpg" alt="img"
                        draggable="false">
                    <img src="https://i.pinimg.com/564x/68/50/75/68507571fc18bca6b4eb480589fb4290.jpg" alt="img"
                        draggable="false">
                    <img src="https://i.pinimg.com/564x/f3/b6/13/f3b613eb7b5a2b0c93b1b76bc9b1e4de.jpg" alt="img"
                        draggable="false">
                    <img src="https://i.pinimg.com/564x/68/d4/57/68d4575eb63f7c604bcbda6b8d5d0158.jpg" alt="img"
                        draggable="false">
                    <img src="https://i.pinimg.com/564x/59/30/33/5930331b83a78a49acf64933b2913b4c.jpg" alt="img"
                        draggable="false">
                    <img src="https://i.pinimg.com/564x/1a/3c/0b/1a3c0b0e63928ea5a42d0c87cb90e020.jpg" alt="img"
                        draggable="false">
                    <img src="https://i.pinimg.com/736x/73/2d/d6/732dd66d2b7feb4878348fc1098d88d5.jpg" alt="img"
                        draggable="false">
                </div>
            </div>
            <div class="portfolio__image-down-content">
                <div class="portfolio__navigation-content">
                    <i id="left" class='bx bx-chevron-left arrow'></i>
                    <i id="right" class='bx bx-chevron-right arrow'></i>
                </div>
                <a href="#" class="button">Перейти в instagram</a>
            </div>
        </section>

        <!--==================== Services ====================-->
        <section class="services section container" id="services">
            <h5 class="section__subtitle">Услуги</h5>
            <h2 class="section__title about__title">Фотосъемка</h2>
            <div class="cheaper grid">
                <div class="cheaper__servicesText-content">
                    <div class="cheaper__servicesText-top">

                        <h4 class="cheaper__servicesText-title">Студийная</h4>
                        <p class="cheaper__servicesText-descr">В одной из наших студий под <br> выбранный вами стиль</p>
                        <p class="cheaper__servicesText-price" style="color: var(--first-color-second); padding-bottom: 1rem;
                    ">от 3000 р.</p>

                    </div>

                    <div class="cheaper__servicesText-down">

                        <h4 class="cheaper__servicesText-title">Уличная</h4>
                        <p class="cheaper__servicesText-descr">В совместно выбранном месте</p>
                        <p class="cheaper__servicesText-price" style="color: var(--first-color-second); padding-bottom: 1rem;
                    ">от 4000 р.</p>

                    </div>
                </div>

                <div class="cheaper__services-image">
                    <img src="/assets/images/service__image.jpg" alt="">
                </div>
            </div>



            <h2 class="section__title about__title">Видеосъемка</h2>
            <div class="cheaper grid">
                <div class="cheaper__services-image">
                    <img src="/assets/images/service__image2.jpg" alt="">
                </div>
                <div class="cheaper__servicesText-content">
                    <div class="cheaper__servicesText-top">

                        <h4 class="cheaper__servicesText-title">Студийная</h4>
                        <p class="cheaper__servicesText-descr">Правильно подберем освещениие и ракурс,<br> для передачи
                            атмосферы</p>
                        <p class="cheaper__servicesText-price" style="color: var(--first-color-second); padding-bottom: 1rem;
                    ">от 7000 р.</p>

                    </div>

                    <div class="cheaper__servicesText-down">

                        <h4 class="cheaper__servicesText-title">Уличная</h4>
                        <p class="cheaper__servicesText-descr">Профессиональная и качественная съемка</p>
                        <p class="cheaper__servicesText-price" style="color: var(--first-color-second); padding-bottom: 1rem;
                    ">от 6000 р.</p>

                    </div>
                </div>
            </div>

        </section>

<!--==================== CONTACT ====================-->
<section class="contact section container" id="contact">                
    <div class="contact__container grid">
        <div class="contact__box">
            <h2 class="section__title">
                Свяжитесь с нами сегодня
                Через любой из предложенных
                Информация
            </h2>

            <div class="contact__data">
                <div class="contact__information">
                    <h3 class="contact__subtitle">Позвоните нам для мгновенной поддержки</h3>
                    <span class="contact__description">
                        <i class='bx bxs-phone'></i>
                        +999 888 777
                    </span>
                </div>

                <div class="contact__information">
                    <h3 class="contact__subtitle">Напишите нам по почте</h3>
                    <span class="contact__description">
                        <i class='bx bxs-envelope' ></i>
                        photoplus@mail.ru
                    </span>
                </div>
            </div>
        </div>

        <form action="">
            <div class="form__inputs">
                <div class="form__content">
                    <input type="email" placeholder=" " class="form__input">
                    <label for="" class="contact__label">Почта</label>
                </div>

                <div class="form__content">
                    <input type="text" placeholder=" " class="form__input">
                    <label for="" class="contact__label">Имя</label>
                </div>

                <div class="form__content contact__area">
                    <textarea name="message" placeholder=" " class="form__input"></textarea>                              
                    <label for="" class="contact__label">Сообщение</label>
                </div>
            </div>

            <button class="button button--flex">
                Отправить
                <i class="ri-arrow-right-up-line button__icon"></i>
            </button>
        </form>
    </div>
</section>
</main>

<?include 'footer.php'?>

    </main>
    <!--=============== MAIN JS ===============-->
    <script src="/assets/main.js"></script>
</body>

</html>