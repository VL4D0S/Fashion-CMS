<?php
$title = "Товары";

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
                    <a class="main-menu__item active" href="products.html">Товары</a>
                </li>
                <li>
                    <a class="main-menu__item" href="orders.html">Заказы</a>
                </li>
                <li>
                    <a class="main-menu__item" href="#">Выйти</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="page-products">
        <h1 class="h h--1">Товары</h1>
        <a class="page-products__button button" href="add.html">Добавить товар</a>
        <div class="page-products__header">
            <span class="page-products__header-field">Название товара</span>
            <span class="page-products__header-field">ID</span>
            <span class="page-products__header-field">Цена</span>
            <span class="page-products__header-field">Категория</span>
            <span class="page-products__header-field">Новинка</span>
        </div>
        <ul class="page-products__list">
            <li class="product-item page-products__item">
                <b class="product-item__name">Туфли черные</b>
                <span class="product-item__field">235454345</span>
                <span class="product-item__field">2 500 руб.</span>
                <span class="product-item__field">Женщины</span>
                <span class="product-item__field">Да</span>
                <a href="add.html" class="product-item__edit" aria-label="Редактировать"></a>
                <button class="product-item__delete"></button>
            </li>
        </ul>
    </main>
    <?php 
    //footer
    require_once(__DIR__ . "/blocks/footer.php"); 
    ?>
</body>

</html>