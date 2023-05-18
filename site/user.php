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

    <title>Пользователь</title>
</head>

<body>

<header class="header" id="header">
        <nav class="nav container">

            <a href="/index.php" class="nav__logo">
                <svg class="logo__img" width="63" height="56" viewBox="0 0 63 56" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M30.5 12.6885C30.2718 12.693 30.0352 12.7025 29.7913 12.7174M11.6906 31.5C11.6906 38.6703 14.5361 43.169 18.1528 45.8852M11.6906 31.5L22.0173 26.0323M11.6906 31.5C11.6906 23.6937 15.201 18.9163 19.4357 16.1297M29.7913 12.7174C31.4284 12.7149 33.5023 12.9741 35.6634 13.6357M29.7913 12.7174C26.8795 12.8955 22.9133 13.8412 19.4357 16.1297M30.5 21.541L22.0173 26.0323M18.1528 45.8852C21.9781 48.7581 26.666 49.637 29.7624 49.5738C31.0301 49.5738 32.5593 49.4169 34.1881 49.0384M18.1528 45.8852L20.594 33.3443M22.0173 26.0323L20.594 33.3443M20.594 33.3443L26.0743 39.6711M34.1881 49.0384L26.0743 39.6711M34.1881 49.0384C38.6339 48.0054 43.8222 45.3215 46.4642 39.6711M26.0743 39.6711H34.9257M46.4642 39.6711C47.5477 37.3537 48.2029 34.5373 48.2029 31.1311C48.2029 27.7221 47.5476 24.9049 46.4642 22.5881M46.4642 39.6711H34.9257M34.9257 39.6711L39.1991 33.3443M46.4642 22.5881L39.1991 33.3443M46.4642 22.5881C44.1093 17.5526 39.7318 14.8811 35.6634 13.6357M39.1991 33.3443L37.6771 24.8607M35.6634 13.6357L37.6771 24.8607M19.4357 16.1297L37.6771 24.8607M30.5 9C23.1238 9 8.29757 13.5 8.00252 31.5C7.87959 39 12.207 54 30.5 54C48.793 54 53.1204 39 52.9975 31.5C52.9975 24 48.498 9 30.5 9Z" />
                    <circle cx="7.5" cy="10.5" r="5" />
                    <path d="M30 29L30 33" stroke-linecap="round" />
                    <path d="M32 31L28 31" stroke-linecap="round" />
                </svg>

            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/index.php#home" class="nav__link link">Главная</a>
                    </li>
                    <li class="nav__item">
                        <a href="/index.php#portfolio" class="nav__link link">Портфолио</a>
                    </li>
                    <li class="nav__item">
                        <a href="/index.php#services" class="nav__link link">Услуги</a>
                    </li>
                    <li class="nav__item">
                        <a href="/index.php#contact" class="nav__link link">Контакты</a>
                    </li>
                    <li class="nav__item">
                        <a href="/logout.php" class="nav__link link">Выйти</a>
                    </li>
                </ul>
                <i class="bx bx-x nav__close" id="nav-close" style="color: black;"></i>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu-alt-right' style="color: black;" ></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="user section container" id="user">
            <div class="hello">
                Здравствуйте
            </div>
            <div class="name_user" id="username">
                Алексей
            </div>
        </section>
        <!--==================== CONTACT ====================-->
        <section class="contact section container" id="contact">
            <div class="contact__container grid">
                <div class="contact__box">
                    <h2 class="section__title">
                        Забронировать студию 
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
                                <i class='bx bxs-envelope'></i>
                                photoplus@mail.ru
                            </span>
                        </div>
                    </div>
                </div>

                <form action="">
                    <div class="form__inputs">
                        <div class="form__content contact__area">
                            <textarea name="message" placeholder=" " class="form__input"></textarea>
                            <label for="" class="contact__label">Сообщение</label>
                        </div>
                    </div>

                    <button type="submit" class="button button--flex">
                        Отправить
                    </button>
                </form>
            </div>
        </section>
    </main>

    <? include 'footer.php'?>

    <!--=============== MAIN JS ===============-->
    <script src="/assets/main.js"></script>
</body>

</html>