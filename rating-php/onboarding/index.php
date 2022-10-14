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
                <a class="header__logo" href="index.html">
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
                                <li>Создать свой рейтинг</li>
                            </ul>
                        </li>
                        <li class="navigation__item navigation__dropdown">
                            <span class="navigation__link">Сравнить</span>
                            <span class="navigation__btn"></span>
                            <ul class="navigation__sub-list">
                                <li><a href="/compare/">Сравнить компании</a></li>
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
        <section class="onboarding">
            <div class="onboarding__wrapper">
                <h1 class="visually-hidden">Составьте свой рейтинг компаний</h1>
                <form class="onboarding__form" id="formSum" method="post">
                    <fieldset id="step0" class="onboarding__item">
                        <legend class="onboarding__title">Какую сумму вы планируете потратить на ремонт?</legend>
                        <p class="onboarding__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="onboarding__input-block">
                            <input type="number" placeholder="Сумма" class="onboarding__input onboarding__input--small" min="5" name="sum" id="sumSmall" required>
                           <!--<input type="number" placeholder="Какую сумму вы можете потратить на ремонт?" class="onboarding__input onboarding__input--large" min="5" name="sum" id="sumLarge" required>--> 
                            <span class="onboarding__decor">Сумма</span>
                        </div>
                        <div class="onboarding__btn onboarding__btn--block">
                            <button type="button" class="onboarding__btn-prev" disabled>Назад</button>
                            <button type="button" id="to-step1" class="onboarding__btn-next not_submit btn-valid">Дальше</button>
                        </div>
                    </fieldset>
                    <fieldset id="step1" class="onboarding__item">
                        <legend class="onboarding__title">Компании с каким количеством отзывом показать?</legend>
                        <div class="onboarding__input-block">
                            <p class="onboarding__input-desc onboarding__input-desc--small">
                                <input type="radio" class="onboarding__input-radio visually-hidden" id="showCompanySmall" name="company">
                                <label class="onboarding__label onboarding__label--radio" for="showCompanySmall">100 отзывов достаточно</label>
                            </p>
                            <p class="onboarding__input-desc onboarding__input-desc--large">
                                <input type="radio" class="onboarding__input-radio visually-hidden" id="showCompanyLarge" name="company">
                                <label class="onboarding__label onboarding__label--radio" for="showCompanyLarge">100 отзывов это уже прилично</label>
                            </p>
                            <p class="onboarding__input-desc">
                                <input type="radio" class="onboarding__input-radio visually-hidden" id="showCompanyTwo" name="company">
                                <label class="onboarding__label onboarding__label--radio" for="showCompanyTwo">Не меньше 150</label>
                            </p>
                            <p class="onboarding__input-desc">
                                <input type="radio" class="onboarding__input-radio visually-hidden" id="showCompanyThree" name="company">
                                <label class="onboarding__label onboarding__label--radio" for="showCompanyThree">Конечно больше 200</label>
                            </p>
                        </div>
                        <div class="onboarding__btn onboarding__btn--radio">
                            <button type="button" id="back-step0" class="onboarding__btn-prev">Назад</button>
                            <button type="button" id="to-step2" class="onboarding__btn-next not_submit">Дальше</button>
                        </div>
                    </fieldset>
                    <fieldset id="step2" class="onboarding__item">
                        <legend class="onboarding__title">Сколько времени вы планируете потратить на ремонт?</legend>
                        <div class="onboarding__input-block">
                            <p class="onboarding__input-desc">
                                <input type="radio" class="onboarding__input-radio visually-hidden" id="showTimeSmall" name="time">
                                <label class="onboarding__label onboarding__label--radio" for="showTimeSmall">Не больше 2 недель</label>
                            </p>
                            <p class="onboarding__input-desc">
                                <input type="radio" class="onboarding__input-radio visually-hidden" id="showTimeTwo"  name="time">
                                <label class="onboarding__label onboarding__label--radio" for="showTimeTwo">Месяц или больше</label>
                            </p>
                            <p class="onboarding__input-desc">
                                <input type="radio" class="onboarding__input-radio visually-hidden" id="showTimeThree" name="time">
                                <label class="onboarding__label onboarding__label--radio" for="showTimeThree">Мне все равно</label>
                        </p>
                        </div>
                        <div class="onboarding__btn onboarding__btn--radio">
                            <button type="button" id="back-step1" class="onboarding__btn-prev">Назад</button>
                            <button type="button" id="to-step3" class="onboarding__btn-next not_submit">Дальше</button>
                        </div>
                    </fieldset>
                    <fieldset id="step3" class="onboarding__item">
                        <legend class="onboarding__title">Какие критерии самые значимые при выборе компании?</legend>
                        <div class="onboarding__input-block onboarding__input-block--checkbox">
                            <p class="onboarding__input-desc onboarding__input-desc--checkbox">
                                <input type="checkbox" class="onboarding__input-checkbox visually-hidden" id="showGreatOne">
                                <label class="onboarding__label onboarding__label--checkbox" for="showGreatOne">Стоимость услуг</label>
                            </p>
                            <p class="onboarding__input-desc onboarding__input-desc--checkbox">
                                <input type="checkbox" class="onboarding__input-checkbox visually-hidden" id="showGreatTwo">
                                <label class="onboarding__label onboarding__label--checkbox" for="showGreatTwo">Количество озывов</label>
                            </p>
                            <p class="onboarding__input-desc  onboarding__input-desc--checkbox">
                                <input type="checkbox" class="onboarding__input-checkbox visually-hidden" id="showGreatThree">
                                <label class="onboarding__label onboarding__label--checkbox" for="showGreatThree">Оценка пользователей</label>
                            </p>
                            <p class="onboarding__input-desc onboarding__input-desc--checkbox">
                                <input type="checkbox" class="onboarding__input-checkbox visually-hidden" id="showGreatFour">
                                <label class="onboarding__label onboarding__label--checkbox" for="showGreatFour">Фотографии в отзывах</label>
                            </p>
                            <p class="onboarding__input-desc onboarding__input-desc--checkbox">
                                <input type="checkbox" class="onboarding__input-checkbox visually-hidden" id="showGreatFive">
                                <label class="onboarding__label onboarding__label--checkbox" for="showGreatFive">Наличие гарантии на ремонт</label>
                            </p>
                            <p class="onboarding__input-desc  onboarding__input-desc--checkbox">
                                <input type="checkbox" class="onboarding__input-checkbox visually-hidden" id="showGreatSix">
                                <label class="onboarding__label onboarding__label--checkbox" for="showGreatSix">Надежность</label>
                            </p>
                        </div>
                        <div class="onboarding__btn onboarding__btn--checkbox">
                            <button type="button" id="back-step2" class="onboarding__btn-prev">Назад</button>
                            <a href="/ratingcustom/" class="onboarding__btn-next" id="submit">Дальше</a>
                        </div>
                    </fieldset>
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
                        <li class="footer__item"><a class="footer__link" href="/compare/">Сравнить компании</a>
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
    <script src="assets/js/menu.min.js"></script>
</body>

</html>