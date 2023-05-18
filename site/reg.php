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

    <title>Регистрация</title>
</head>

<body>


    <?include 'header.php' ?>

    <main class="main">
        <section class="section container" id="reg">
            <div class="reg_auth reg_auth-registration">

                <h2 style="margin-bottom: 2rem;">Регистрация:</h2>

                <form action="register.php" method="POST" >
                    <div class="form__inputs">
                        <div class="form__content">
                            <input type="text" placeholder="" name="login" autocomplete="on" class="form__input">
                            <label for="" class="contact__label">Логин</label>
                        </div>

                        <div class="form__content">
                            <input type="text" placeholder="" name="email" autocomplete="on" class="form__input">
                            <label for="" class="contact__label">Почта</label>
                        </div>

                        <div class="form__content">
                            <input type="password" placeholder="" name="pass" autocomplete="on" class="form__input">
                            <label for="" class="contact__label">Пароль</label>
                        </div>

                        <div class="form__content">
                            <input type="password" placeholder="" name="repatpass" autocomplete="on" class="form__input">
                            <label for="" class="contact__label">Повторите пароль</label>
                        </div>
                    </div>

                    <button type="submit" class="button button--flex">
                        Зарегистрироваться
                    </button>

                    <div class="form__link-descr">
                        <p class="form__descr">У вас есть аккаунт ? </p>
                        <a href="/auth.php" class="form__link link">Авторизуйтесь</a>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <? include 'footer.php'?>

    <!--=============== MAIN JS ===============-->
    <script src="/assets/main.js"></script>
</body>

</html>