<header class="page-header">
    <a class="page-header__logo" href="/">
        <img src="img/logo.svg" alt="Fashion">
    </a>
    <nav class="page-header__menu">
        <ul class="main-menu main-menu--header">
            <li>
                <a class="main-menu__item <?php if (($title === 'Fashion') && (!$_GET)) echo 'active'?>" href="/">Главная</a>
            </li>
            <li>
                <a class="main-menu__item <?php if ($_GET['new'] == 'y') echo 'active'?>" href="/?new=y">Новинки</a>
            </li>
            <li>
                <a class="main-menu__item <?php if ($_GET['sale'] == 'y') echo 'active'?>" href="/?sale=y">Sale</a>
            </li>
            <li>
                <a class="main-menu__item <?php if (($title === 'Доставка') && (!$_GET)) echo 'active'?>" href="/delivery.php">Доставка</a>
            </li>
        </ul>
    </nav>
</header>