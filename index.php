<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>stroiarm</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__wrap">
                <div class="header__logo-wrap">
                    <img src="/img/logo.png" alt="логотип" class="header__logo-img">
                    <p class="header__logo">СтройАрм</p>
                </div>
                <p class="header__tel">8 999 999 99 99</p>
                <a target="_blank" href="https://telegram.org/" class="header__telegram-icon">
                    <img src="/img/telegram.svg" alt="" class="header__social">
                </a>
                <a target="_blank" href="https://vk.com/" class="header__vk-icon">
                    <img src="/img/vk.svg" alt="" class="header__social">
                </a>
                <a target="_blank" href="https://www.whatsapp.com/" class="header__whatsup-icon">
                    <img src="/img/whats-app.svg" alt="" class="header__social">
                </a>
                <img src="/img/burger.svg" alt="" class="header__burger">
            </div>
            <div class="header__burger-menu">
                <p class="header__burger-menu-item">Тел 8 999 999 99 99</p>
                <p class="header__burger-menu-item">Галерея работ</p>
                <p class="header__burger-menu-item">
                    <img src="/img/telegram.svg" alt="" class="header__burger-menu-icon">
                    <img src="/img/vk.svg" alt="" class="header__burger-menu-icon">
                    <img src="/img/whats-app.svg" alt="" class="header__burger-menu-icon">
                </p>
                <p class="header__burger-menu-item"></p>
                <p class="header__burger-menu-item"></p>
            </div>
    </header>
    <div class="header-duplicate"></div>
    <form method="POST" action="action.php" class="cost-form block-fz">
        <div class="container">
            <h1 class="cost-form__title">
                Капитальный ремонт квартир с работой и материалами по фиксированной цене и срокам
            </h1>
            <p class="cost-form__sub-title">
                Качественный ремонт вашей квартиры в Москве и Подмосковью точно в срок и с гарантией 1 год! <br>
                БЕСПЛАТНЫЙ выезд инженера и смета на следующий день
            </p>
            <fieldset class="cost-form__input">
                <input name="name" placeholder="Введите имя" type="text" class="cost-form__name">
                <input name="tel" placeholder="Введите телефон" type="number" class="cost-form__tel">
                <button type="submit" class="cost-form__btn">Узнать стоимость</button>
            </fieldset>
            <p class="cost-form__data-processing">Нажимая на кнопку «Узнать стоимость», я даю согласие на обработку
                персональных данных</p>
        </div>
    </form>
    <section class="gallery">
        <div class="container">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/img/slider/s1.jpg" alt="" class="swiper-slide-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/slider/s1.jpg" alt="" class="swiper-slide-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/slider/s1.jpg" alt="" class="swiper-slide-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/slider/s1.jpg" alt="" class="swiper-slide-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/slider/s1.jpg" alt="" class="swiper-slide-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/slider/s1.jpg" alt="" class="swiper-slide-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/slider/s1.jpg" alt="" class="swiper-slide-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/slider/s1.jpg" alt="" class="swiper-slide-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/slider/s1.jpg" alt="" class="swiper-slide-img">
                    </div>
                    <div class="swiper-slide">
                        <img src="/img/slider/s1.jpg" alt="" class="swiper-slide-img">
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="service-rate block-fz">
        <div class="container">
            <h2 class="service-rate__title">
                Квартира будет выглядеть так, как вы захотите. Материалы и цвета выбираете сами.
            </h2>
            <p class="service-rate__sub-title">
                Основные виды отделочных решений:
            </p>
            <div class="service-rate__item">
                <h2 class="service-rate__item-title">
                    Черновой ремонт новостройки

                </h2>
                <p class="service-rate__item-cost">
                    &nbsp; От 8000 р кв.м
                </p>
                <p class="service-rate__item-info">
                    - Возведение перегородок <br>
                    - Укладка электрического кабеля с выводом точек освещения, розеток, выключателей <br>
                    - Монтаж труб ХВС, ГВС и канализации <br>
                    - Устройство стяжки пола <br>
                    - Штукатурка поверхностей потолка, стен <br>
                    - И другие виды работ
                </p>
            </div>
            <div class="service-rate__item">
                <h2 class="service-rate__item-title">
                    Ремонт под ключ в Новостройке
                </h2>
                <p class="service-rate__item-cost">
                    &nbsp; От 15000 р. Кв.м
                </p>
                <p class="service-rate__item-info">
                    - Возведение перегородок <br>
                    - Укладка электрического кабеля с выводом точек освещения, розеток, выключателей <br>
                    - Монтаж труб ХВС, ГВС и канализации <br>
                    - Устройство стяжки пола <br>
                    - Штукатурка поверхностей потолка, стен <br>
                    - Монтаж сантехники – унитаза, раковины, биде, душевой кабины, мойки <br>
                    - Окраска стен и потолков, оклейка рулонными материалами <br>
                    - Монтаж светильников, люстр, выключателей, розеток <br>
                    - Монтаж напольного покрытия, укладка плитки на полу или стенах <br>
                    - И другие виды работ
                </p>
            </div>
            <div class="service-rate__item">
                <h2 class="service-rate__item-title">
                    Капитальный ремонт квартиры
                </h2>
                <p class="service-rate__item-cost">
                    &nbsp; От 16000 р кв.м
                </p>
                <p class="service-rate__item-info">
                    - Удаление старых обоев, краски, плитки, напольных покрытий <br>
                    - Монтаж напольного покрытия, укладка плитки на полу или стенах <br>
                    - Окраска стен и потолков, оклейка рулонными материалами <br>
                    - Монтаж светильников, люстр, выключателей, розеток <br>
                    - Монтаж сантехники – унитаза, раковины, биде, душевой кабины, мойки <br>
                    - Устройство стяжки пола <br>
                    - И другие виды работ
                </p>
            </div>
        </div>
    </section>
    <section class="payment block-fz">
        <div class="container">
            <h2 class="payment__title">
                Мы сделали комфортные условия оплаты
            </h2>
            <h3 class="payment__sub-title">
                Быстрый старт гарантируем!
            </h3>
            <div class="payment__block">
                <div class="payment__block-item">
                    <img src="/img/plan.svg" alt="" class="payment__block-item-icon">
                    <p class="payment__block-item-title">30% оплаты</p>
                    <p class="payment__block-item-sub-title">Перед началом первого этапа работ</p>
                </div>
                <img src="/img/arrow.svg" alt="" class="payment__block-arrow">
                <div class="payment__block-item">
                    <img src="/img/process.svg" alt="" class="payment__block-item-icon">
                    <p class="payment__block-item-title">40% оплаты</p>
                    <p class="payment__block-item-sub-title">Перед вторым этапом работ</p>
                </div>
                <img src="/img/arrow.svg" alt="" class="payment__block-arrow">
                <div class="payment__block-item">
                    <img src="/img/done.svg" alt="" class="payment__block-item-icon">
                    <p class="payment__block-item-title">30% оплаты</p>
                    <p class="payment__block-item-sub-title">После сдачи квартиры</p>
                </div>
            </div>
            <div class="payment__footer">
                <img src="/img/cleaning.svg" alt="" class="payment__footer-img">
                <p class="payment__footer-text">
                    Бонус всем клиентам:
                    <br>
                    влажная уборка квартиры
                </p>
            </div>
        </div>
    </section>
    <section class="warranty block-fz">
        <div class="container">
            <h2 class="warranty__title">
                Проверка хода выполнения ремонта вашей квартиры, офиса или магазина.
            </h2>
            <h3 class="warranty__sub-title">
                <b> В любой момент вы можете прийти и проверить ход выполнения работ.</b>
                <br>
                Ваш менеджер ответит на все ваши вопросы. Фото видео отчеты по ходу выполнения ремонтных работ
            </h3>
            <div class="warranty__desc">
                <div class="warranty__desc-wrap">
                    <img src="/img/contract.svg" alt="" class="warranty__img">
                    <p class="warranty__text">Мы предоставляем гарантии по договору</p>
                </div>
                <div class="warranty__desc-wrap">
                    <img src="/img/cart.svg" alt="" class="warranty__img">
                    <p class="warranty__text">Закупим привезем и поднимем все необходимые материалы на ваш объект самостоятельно</p>
                </div>
                <div class="warranty__desc-wrap">
                    <img src="/img/chat.svg" alt="" class="warranty__img">
                    <p class="warranty__text">Откроем персональный чат с вашим личным менеджером</p>
                </div>
                <div class="warranty__desc-wrap">
                    <img src="/img/reliability.svg" alt="" class="warranty__img">
                    <p class="warranty__text">Обещаем надёжность выполненых работ под ключ</p>
                </div>
            </div>
        </div>
    </section>
    <section class="excursion block-fz">
        <div class="container">
            <h2 class="excursion__title">
                Качество предоставляемых услуг, надежность и честность вот наш девиз в работе
            </h2>
            <p class="excursion__sub-title">
                Еще больше фотографий наших работ в группе во <a href="https://vk.com/" class="excursion__sub-title-link">Вконтакте</a>
            </p>
            <button type="submit" class="excursion__button">Записаться на просмотр текущих объектов</button>
        </div>
    </section>
    <section class="map block-fz">
            <img src="/img/map2000.jpg" alt="" class="map__img">
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer__nav">
                <p class="footer__email">
                    StroiArmru@yandex.ru
                </p>
                <a href="#" class="footer__conf">
                    Политика конфидинциальности
                </a>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</html>