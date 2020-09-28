<?php
$title = "Авторизация";

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
                    <a class="main-menu__item" href="#">Главная</a>
                </li>
                <li>
                    <a class="main-menu__item" href="#">Новинки</a>
                </li>
                <li>
                    <a class="main-menu__item" href="index.html">Sale</a>
                </li>
                <li>
                    <a class="main-menu__item" href="delivery.html">Доставка</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="page-authorization">
        <h1 class="h h--1">Авторизация</h1>
        <form class="custom-form" action="#" method="post">
            <input type="email" class="custom-form__input" required="">
            <input type="password" class="custom-form__input" required="">
            <button class="button" type="submit">Войти в личный кабинет</button>
        </form>
    </main>
    <?php 
    //footer
    require_once(__DIR__ . "/blocks/footer.php"); 
    ?>
</body>

</html>