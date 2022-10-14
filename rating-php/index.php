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

<body class="page-body">
  <header class="header">
    <div class="header__wrapper">
      <div class="header__menu">
        <a class="header__logo" href="#top">
          <img class="header__logo-img" src="assets/img/logo.svg" width="176" height="31" alt="Логотип сайта - Рейтинг"
            title="Логотип сайта - Рейтинг">
        </a>
        <button class="header__toggle" type="button"><span class="visually-hidden">Открыть меню</span></button>
        <nav class="header__navigation navigation">
          <ul class="navigation__list navigation__list--closed">
            <li class="navigation__item navigation__dropdown">
              <span class="navigation__link">Рейтинги</span>
              <span class="navigation__btn"></span>
              <ul class="navigation__sub-list">
                <li><a>Топ по надежности</a></li>
                <li><a href="/rating/">Топ компаний</a></li>
                <li><a href="/onboarding/">Создать свой рейтинг</a></li>
              </ul>
            </li>
            <li class="navigation__item navigation__dropdown">
              <span class="navigation__link">Сравнить</span>
              <span class="navigation__btn"></span>
              <ul class="navigation__sub-list">
                <li><a href="compare.html">Сравнить компании</a></li>
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
    <section id="top" class="choice">
      <div class="choice__wrapper">
        <h1 class="choice__title">Собираетесь делать ремонт?</h1>
        <h2 class="choice__subtitle">Мы хотим помочь вам сделать выбор компании</h2>
        <p class="choice__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <span>incididunt ut labore et
          dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud.</span></p>
        <a class="choice__button" href="/onboarding/">Выбрать лучшую компанию</a>
      </div>
    </section>
    <section class="company">
      <div class="company__wrapper">
        <div class="company__flex-column">
        <h2 class="company__title">Лучшая компания</h2>
        <p class="company__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
          fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
          mollit
          anim id est laborum.
        </p>
        <a class="company__button" href="/company/">Узнать больше</a>
      </div>
      <a class="company__link" href="/company/" target="_blank">
        <img class="company__logo" src="assets/img/logo-studia.svg" alt="Логотип компании Студия ремонта" title="Логотип компании Студия ремонта">
    </a>
      </div>
    </section>
    <section class="rating">
      <div class="rating__wrapper">
        <h2 class="rating__title">Рейтинг компаний</h2>
        <ul class="rating__subtitle">
          <li class="rating__name">Компания</li>
          <li class="rating__name">Оценка</li>
          <li class="rating__name">Цены</li>
          <li class="rating__name">Отзывы</li>
          <li class="rating__name">Сравнить</li>
        </ul>
        <div class="rating__table">
          <div class="rating__cell">
            <div class="rating__desk">
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Компания</h3>
                <a class="rating__item-link" href="https://studia-remontov.ru" target="_blank">
                        <div class="rating__text">
                          <img class="rating__img" src="assets/img/logo-studia-small.svg"
                        alt="Логотип компании" title="Логотип компании">
                          <h4 class="rating__company-name">Студия Ремонтов</h4>
                          <p class="rating__underline">studia-remontov.ru</p>
                          <p>+7 (945) 414-24-40</p>
                        </div>
                      </a>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Оценка</h3>
                <p class="rating__value rating__value--star">4.9</p>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Цены</h3>
                <p class="rating__value">$$$</p>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Отзывы</h3>
                <p class="rating__value rating__value--buble"><a class="rating__link-reviews" href="#">1500 отзывов</a></p>
              </div>
            </div>
            <input id="first-item" class="rating__check" type="checkbox">
            <label class="rating__check-custom" for="first-item"></label>
          </div>
          <div class="rating__cell">
            <div class="rating__desk">
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Компания</h3>
                <a class="rating__item-link" href="https://studia-remontov.ru" target="_blank">
                        <div class="rating__text">
                          <img class="rating__img" src="assets/img/logo-studia-small.svg"
                        alt="Логотип компании" title="Логотип компании">
                          <h4 class="rating__company-name">Студия Ремонтов</h4>
                          <p class="rating__underline">studia-remontov.ru</p>
                          <p>+7 (945) 414-24-40</p>
                        </div>
                </a>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Оценка</h3>
                <p class="rating__value rating__value--star">4.9</p>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Цены</h3>
                <p class="rating__value">$$$$</p>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Отзывы</h3>
                <p class="rating__value rating__value--buble"><a class="rating__link-reviews" href="#">1500 отзывов</a></p>
              </div>
            </div>
            <input id="second-item" class="rating__check" type="checkbox">
            <label class="rating__check-custom" for="second-item"></label>
          </div>
          <div class="rating__cell">
            <div class="rating__desk">
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Компания</h3>
                <a class="rating__item-link" href="https://studia-remontov.ru" target="_blank">
                        <div class="rating__text">
                          <img class="rating__img" src="assets/img/logo-studia-small.svg"
                        alt="Логотип компании" title="Логотип компании">
                          <h4 class="rating__company-name">Студия Ремонтов</h4>
                          <p class="rating__underline">studia-remontov.ru</p>
                          <p>+7 (945) 414-24-40</p>
                        </div>
                      </a>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Оценка</h3>
                <p class="rating__value rating__value--star">4.9</p>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Цены</h3>
                <p class="rating__value">$$$</p>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Отзывы</h3>
                <p class="rating__value rating__value--buble"><a class="rating__link-reviews" href="#">1500 отзывов</a></p>
              </div>
            </div>
            <input id="third-item" class="rating__check" type="checkbox">
            <label class="rating__check-custom" for="third-item"></label>
          </div>
          <div class="rating__cell">
            <div class="rating__desk">
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Компания</h3>
                <a class="rating__item-link" href="https://studia-remontov.ru" target="_blank">
                    <div class="rating__text">
                        <img class="rating__img" src="assets/img/logo-studia-small.svg"
                        alt="Логотип компании" title="Логотип компании">
                        <h4 class="rating__company-name">Студия Ремонтов</h4>
                        <p class="rating__underline">studia-remontov.ru</p>
                        <p>+7 (945) 414-24-40</p>
                    </div>
                </a>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Оценка</h3>
                <p class="rating__value rating__value--star">4.9</p>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Цены</h3>
                <p class="rating__value">$$$</p>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Отзывы</h3>
                <p class="rating__value rating__value--buble"><a class="rating__link-reviews" href="#">1500 отзывов</a></p>
              </div>
            </div>
            <input id="fourth-item" class="rating__check" type="checkbox">
            <label class="rating__check-custom" for="fourth-item"></label>
          </div>
          <div class="rating__cell">
            <div class="rating__desk">
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Компания</h3>
                <a class="rating__item-link" href="https://studia-remontov.ru" target="_blank">
                        <div class="rating__text">
                          <img class="rating__img" src="assets/img/logo-studia-small.svg"
                        alt="Логотип компании" title="Логотип компании">
                          <h4 class="rating__company-name">Студия Ремонтов</h4>
                          <p class="rating__underline">studia-remontov.ru</p>
                          <p>+7 (945) 414-24-40</p>
                        </div>
                </a>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Оценка</h3>
                <p class="rating__value rating__value--star">4.9</p>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Цены</h3>
                <p class="rating__value">$$$</p>
              </div>
              <div class="rating__item">
                <h3 class="rating__subtitle rating__subtitle--intro">Отзывы</h3>
                <p class="rating__value rating__value--buble"><a class="rating__link-reviews" href="#">1500 отзывов</a></p>
              </div>
            </div>
            <input id="fifth-item" class="rating__check" type="checkbox">
            <label class="rating__check-custom" for="fifth-item"></label>
          </div>
        </div>
        <a class="rating__button" href="/rating/">Узнать больше</a>
      </div>
    </section>
    <section class="feedback">
      <div class="feedback__wrapper">
        <h2 class="feedback__title">Необходима консультация в <span class="feedback__br-tablet">выборе <span class="feedback__br-desktop">компании?</span></span></h2>
        <form class="feedback__form" method="post" action="#" id="callBack">
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
          <li class="footer__item"><a class="footer__link" href="#">Топ по надежности</a></li>
          <li class="footer__item"><a class="footer__link" href="/rating/">Топ компаний</a></li>
          <li class="footer__item"><a class="footer__link" href="/onboarding/">Создать свой рейтинг</a></li>
        </ul>
      </div>
      <div class="footer__nav">
        <h3 class="footer__subtitle">Сравнить</h3>
        <ul class="footer__list">
          <li class="footer__item"><a class="footer__link" href="/compare/">Сравнить компании</a></li>
          <li class="footer__item"><a class="footer__link" href="#">Сравнить все</a></li>
          <li class="footer__item"><a class="footer__link" href="#">Выбрать для сравнения</a></li>
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
      <a class="footer__logo" href="#top">
        <img class="footer__logo-img" src="assets/img/logo-white.svg" width="176" height="31" alt="Логотип сайта - Рейтинг"
          title="Логотип сайта - Рейтинг">
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