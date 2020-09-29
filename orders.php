<?php
$title = "Список заказов";

//head
require_once(__DIR__ . "/blocks/head.php");
?>

<body>
    <header class="page-header">
        <a class="page-header__logo" href="#">
            <img src="img/logo.svg" alt="Fashion">
        </a>
        <nav class="page-header__menu">
            <ul class="main-menu main-menu--header">
                <li>
                    <a class="main-menu__item" href="index.html">Главная</a>
                </li>
                <li>
                    <a class="main-menu__item" href="products.html">Товары</a>
                </li>
                <li>
                    <a class="main-menu__item active" href="orders.html">Заказы</a>
                </li>
                <li>
                    <a class="main-menu__item" href="#">Выйти</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="page-order">
        <h1 class="h h--1">Список заказов</h1>
        <ul class="page-order__list">
            <li class="order-item page-order__item">
                <div class="order-item__wrapper">
                    <div class="order-item__group order-item__group--id">
                        <span class="order-item__title">Номер заказа</span>
                        <span class="order-item__info order-item__info--id">235454345</span>
                    </div>
                    <div class="order-item__group">
                        <span class="order-item__title">Сумма заказа</span>
                        10 400 руб.
                    </div>
                    <button class="order-item__toggle"></button>
                </div>
                <div class="order-item__wrapper">
                    <div class="order-item__group order-item__group--margin">
                        <span class="order-item__title">Заказчик</span>
                        <span class="order-item__info">Смирнов Павел Владимирович</span>
                    </div>
                    <div class="order-item__group">
                        <span class="order-item__title">Номер телефона</span>
                        <span class="order-item__info">+7 987 654 32 10</span>
                    </div>
                    <div class="order-item__group">
                        <span class="order-item__title">Способ доставки</span>
                        <span class="order-item__info">Самовывоз</span>
                    </div>
                    <div class="order-item__group">
                        <span class="order-item__title">Способ оплаты</span>
                        <span class="order-item__info">Наличными</span>
                    </div>
                    <div class="order-item__group order-item__group--status">
                        <span class="order-item__title">Статус заказа</span>
                        <span class="order-item__info order-item__info--no">Не выполнено</span>
                        <button class="order-item__btn">Изменить</button>
                    </div>
                </div>
                <div class="order-item__wrapper">
                    <div class="order-item__group">
                        <span class="order-item__title">Адрес доставки</span>
                        <span class="order-item__info">г. Москва, ул. Пушкина, д.5, кв. 233</span>
                    </div>
                </div>
                <div class="order-item__wrapper">
                    <div class="order-item__group">
                        <span class="order-item__title">Комментарий к заказу</span>
                        <span class="order-item__info">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу.</span>
                    </div>
                </div>
            </li>
            <li class="order-item page-order__item">
                <div class="order-item__wrapper">
                    <div class="order-item__group order-item__group--id">
                        <span class="order-item__title">Номер заказа</span>
                        <span class="order-item__info order-item__info--id">235454345</span>
                    </div>
                    <div class="order-item__group">
                        <span class="order-item__title">Сумма заказа</span>
                        10 400 руб.
                    </div>
                    <button class="order-item__toggle"></button>
                </div>
                <div class="order-item__wrapper">
                    <div class="order-item__group order-item__group--margin">
                        <span class="order-item__title">Заказчик</span>
                        <span class="order-item__info">Смирнов Павел Владимирович</span>
                    </div>
                    <div class="order-item__group">
                        <span class="order-item__title">Номер телефона</span>
                        <span class="order-item__info">+7 987 654 32 10</span>
                    </div>
                    <div class="order-item__group">
                        <span class="order-item__title">Способ доставки</span>
                        <span class="order-item__info">Самовывоз</span>
                    </div>
                    <div class="order-item__group">
                        <span class="order-item__title">Способ оплаты</span>
                        <span class="order-item__info">Наличными</span>
                    </div>
                    <div class="order-item__group order-item__group--status">
                        <span class="order-item__title">Статус заказа</span>
                        <span class="order-item__info order-item__info--no">Не выполнено</span>
                        <button class="order-item__btn">Изменить</button>
                    </div>
                </div>
                <div class="order-item__wrapper">
                    <div class="order-item__group">
                        <span class="order-item__title">Адрес доставки</span>
                        <span class="order-item__info">г. Москва, ул. Пушкина, д.5, кв. 233</span>
                    </div>
                </div>
                <div class="order-item__wrapper">
                    <div class="order-item__group">
                        <span class="order-item__title">Комментарий к заказу</span>
                        <span class="order-item__info">Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Вдали от всех живут они в буквенных домах на берегу.</span>
                    </div>
                </div>
            </li>
        </ul>
    </main>
    <?php 
    //footer
    require_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/footer.php");
    ?>
</body>

</html>