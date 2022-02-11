<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Apple</title>
    <link rel='stylesheet' href='{{asset('css/style.css')}}'>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('libs/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('libs/slick/slick-theme.css')}}">
</head>

<body>
<header>
    <div class="container">
        <div class="navbar">
            <div class="nav__links">
                <div class="nav__left wow backInLeft">
                    <a href="#"><img src="./img/apple.svg" alt="apple__logo"></a>
                    <div class="dropdown__iphone">
                        <li><a href="#">iPhone</a></li>
                        <div class="dr__iphone__links">
                            <a href="#">Iphone 8</a>
                            <a href="#">Iphone xs</a>
                            <a href="#">Iphone 13 mini</a>
                            <a href="#">Iphone 11 pro</a>
                            <a href="#">Iphone 12 pro max</a>
                        </div>
                    </div>
                    <div class="nv__ln_mb">
                        <li><a href="#">iPad</a></li>
                        <li><a href="#">Macbook</a></li>
                        <li><a href="#">iMac</a></li>
                        <li><a href="#">Samsung</a></li>
                    </div>
                </div>
                <div class="wow backInRight nav__right">
                    <li><a href="#">Переклейка</a></li>
                    <li><a href="#">Ремонт</a></li>
                    <li><a href="#">Выкуп</a></li>
                    <li><a href="#">Партнерамм</a></li>
                </div>
            </div>
        </div>
        <div class="info__block">
            <div class="info__intro wow bounceInLeft data-wow-duration=" 5s>
                <h1>
                    Переклейка дисплея любого iPhone
                </h1>
                <p>
                    Оригинальные запчасти
                    Разумные цены
                    Выезд
                </p>
            </div>
        </div>
    </div>
</header>
<main>
 @yield('content')
</main>
<footer>
    <div class="container">
        <div class="footer__intro wow bounceInLeft data-wow-duration=" 5s>
            <img src="./img/app_dark.svg" alt="apple">
            <a href="#">iservice</a>
        </div>
        <div class="footer__links">
            <div class="footer__link link__block1">
                <p>
                    Телефон: +7 (495) 374-64-74
                </p>
                <p class="links2">
                    Адрес: г. Москва, ул. Никольская 10 (ТРЦ "Никольская Плаза / Вокруг света")
                </p>
                <p>
                    Работаем ежедневно 10:00 - 20:00,
                </p>
                <p>
                    без перерывов и выходных
                </p>
            </div>
            <div class="footer__link link__block2">
                <a href="#">
                    Ремонт iPhone
                </a>
                <a href="#">
                    Ремонт iPad
                </a>
                <a href="#">
                    Ремонт MacBook
                </a>
            </div>
            <div class="footer__link link__block3">
                <a href="#">
                    Новости
                </a>
                <a href="#">
                    Блог
                </a>
                <a href="#">
                    Акции и скидки
                </a>
                <a href="#">
                    Отзывы клиентов
                </a>
            </div>
            <div class="footer__link link__block4">
                <a href="#">
                    О компании
                </a>
                <a href="#">
                    Как мы работаем
                </a>
                <a href="#">
                    Гарантия
                </a>
                <a href="#">
                    Вакансии
                </a>
                <a href="#">
                    Контакты
                </a>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('libs/slick/slick.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
<script src="{{asset('js/script.js')}}"></script>
</body>

</html>
