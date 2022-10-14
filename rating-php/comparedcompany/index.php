<!DOCTYPE html>
<html class="page" lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Собираетесь делать ремонт? Мы хотим помочь вам сделать выбор компании!</title>
    <meta name="description" content="Собираетесь делать ремонт? Мы хотим помочь вам сделать выбор компании!">
    <meta name="keywords" content="рейтинг, аналитика">
    <link href="assets/css/style.min.css" rel="stylesheet">
</head>

<body class="page-body page-body--rating">
    <header class="header">
        <div class="header__wrapper header__wrapper--article">
            <div class="header__menu">
                <a class="header__logo" href="/index/">
                    <img class="header__logo-img" src="assets/img/logo.svg" width="176" height="31"
                        alt="Логотип сайта - Рейтинг" title="Логотип сайта - Рейтинг">
                </a>
                <button class="header__toggle" type="button"><span class="visually-hidden">Открыть меню</span></button>
                <nav class="header__navigation navigation">
                    <ul class="navigation__list navigation__list--closed">
                        <li class="navigation__item navigation__dropdown">
                            <span class="navigation__link">Рейтинги</span>
                            <span class="navigation__btn"></span>
                            <ul class="navigation__sub-list">
                                <li><a href="#">Топ по надежности</a></li>
                                <li><a href="/rating/">Топ компаний</a></li>
                                <li><a href="/onboarding/">Создать свой рейтинг</a></li>
                            </ul>
                        </li>
                        <li class="navigation__item navigation__dropdown">
                            <span class="navigation__link">Сравнить</span>
                            <span class="navigation__btn"></span>
                            <ul class="navigation__sub-list">
                                <li>Сравнить компании</li>
                                <li><a href="#">Сравнить все</a></li>
                                <li><a href="#">Выбрать для сравнения</a></li>  
                            </ul>
                        </li>
                        <li class="navigation__item">
                            <a class="navigation__link" href="/article/">Как выбрать</a>
                        </li>
                        <li class="navigation__item">
                            <a class="navigation__link" href="/company/">О нас</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section id="top" class="compared">
            <div class="compared__wrapper">
                <h1 class="compared__title">Сравнение компаний</h1>
                <form class="compared__form" id="formCompared" method="post">
                    <div class="compared__select-block">
                        <ul class="compared__list-company">
                            <li class="compared__name-company">
                                <span>Студия Ремонтов</span>
                                <button class="compared__dlt-company"><span class="visually-hidden">Удалить выбранную компанию</span></button>
                            </li>
                            <li class="compared__name-company">
                                <span>Аттика</span>
                                <button class="compared__dlt-company"><span class="visually-hidden">Удалить выбранную компанию</span></button>
                            </li>
                        </ul>
                        <select class="compared__select">
                            <option>Выбрать компанию</option>
                        </select>
                    </div>
                </form>
                <div class="compared__hallmark hallmark">
                    <ul class="hallmark__list">
                        <li class="hallmark__item">
                            <div class="hallmark__label">
                                <h2 class="hallmark__title">Цена</h2>
                                <button class="hallmark__dlt"><span class="visually-hidden">Удалить выбранный критерий</span></button>
                            </div>
                            <div class="hallmark__canvas">
                                <div class="hallmark__canvas-area">
                                </div>
                            </div>
                        </li>
                        <li class="hallmark__item">
                            <div class="hallmark__label">
                                <h2 class="hallmark__title">Отзывы</h2>
                                <button class="hallmark__dlt"><span class="visually-hidden">Удалить выбранный критерий</span></button>
                            </div>
                            <div class="hallmark__canvas">
                                <div class="hallmark__canvas-area">
                                </div>
                            </div>
                        </li>
                        <li class="hallmark__item">
                            <div class="hallmark__label">
                                <h2 class="hallmark__title">Оценка пользователей</h2>
                                <button class="hallmark__dlt"><span class="visually-hidden">Удалить выбранный критерий</span></button>
                            </div>
                            <div class="hallmark__canvas">
                                <div class="hallmark__canvas-area">
                                </div>
                            </div>
                        </li>
                        <li class="hallmark__item">
                            <div class="hallmark__label">
                                <h2 class="hallmark__title">Фотографии</h2>
                                <button class="hallmark__dlt"><span class="visually-hidden">Удалить выбранный критерий</span></button>
                            </div>
                            <div class="hallmark__canvas">
                                <div class="hallmark__canvas-area">
                                </div>
                            </div>
                        </li>
                        <li class="hallmark__item">
                            <div class="hallmark__label">
                                <h2 class="hallmark__title">Гарантия на ремонт</h2>
                                <button class="hallmark__dlt"><span class="visually-hidden">Удалить выбранный критерий</span></button>
                            </div>
                            <div class="hallmark__canvas" >
                                <div class="hallmark__canvas-area hallmark__canvas-area--delta">
                                </div>
                            </div>
                        </li>
                        <li class="hallmark__item">
                            <div class="hallmark__label">
                                <h2 class="hallmark__title">Надежность</h2>
                                <button class="hallmark__dlt"><span class="visually-hidden">Удалить выбранный критерий</span></button>
                            </div>
                            <div class="hallmark__canvas">
                                <div class="hallmark__canvas-area">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <button type="button" class="compared__btn">добавить еще одну компанию к сравнению</button>
            </div>
        </section>
        <section class="feedback">
            <div class="feedback__wrapper feedback__wrapper--top">
              <h2 class="feedback__title">Необходима консультация в <span class="feedback__br-tablet">выборе <span class="feedback__br-desktop">компании?</span></span></h2>
              <form class="feedback__form" method="post" action="#" id="callBackRating">
                <label class="feedback__phone" for="phone">Мы вам перезвоним и ответим на все ваши вопросы</label>
                <input class="feedback__input" type="tel" id="phone" name="phone" pattern="\+7\[0-9]{3}\s?\[0-9]{3}\s?\[0-9]{2}\s?\[0-9]{2}" required placeholder="+7(XХХ) ХХХ ХХ ХХ">
                <button type="submit" class="feedback__button btn-valid">Перезвоните мне</button>
              </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__wrapper">
            <h2 class="visually-hidden">Навигация по сайту и полезная информация о выборе компании</h2>
            <div class="footer__flex">
                <div class="footer__nav">
                    <h3 class="footer__subtitle">Рейтинг</h3>
                    <ul class="footer__list">
                        <li class="footer__item"><a class="footer__link" href="#">Топ по надежности</a>
                        </li>
                        <li class="footer__item"><a class="footer__link" href="/rating/">Топ компаний</a></li>
                        <li class="footer__item"><a class="footer__link" href="#top">Создать свой
                                рейтинг</a></li>
                    </ul>
                </div>
                <div class="footer__nav">
                    <h3 class="footer__subtitle">Сравнить</h3>
                    <ul class="footer__list">
                        <li class="footer__item footer__link"><a class="footer__link" href="#top">Сравнить компании</a>
                        </li>
                        <li class="footer__item"><a class="footer__link" href="#">Сравнить все</a></li>
                        <li class="footer__item"><a class="footer__link" href="#">Выбрать для
                                сравнения</a></li>
                    </ul>
                </div>
                <div class="footer__nav">
                    <h3 class="footer__subtitle">Статьи</h3>
                    <ul class="footer__list">
                        <li class="footer__item"><a class="footer__link" href="/article/">Как выбрать</a></li>
                        <li class="footer__item"><a class="footer__link" href="#">Компании</a></li>
                        <li class="footer__item"><a class="footer__link" href="/company/">О нас</a></li>
                    </ul>
                </div>
                <a class="footer__logo" href="index.html">
                    <img class="footer__logo-img" src="assets/img/logo-white.svg" width="176" height="31"
                        alt="Логотип сайта - Рейтинг" title="Логотип сайта - Рейтинг">
                </a>
                <p class="footer__copyright">© Рейтинг Ремонта 2020</p>
            </div>
        </div>
    </footer>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="assets/js/menu.min.js"></script>
</body>

</html>