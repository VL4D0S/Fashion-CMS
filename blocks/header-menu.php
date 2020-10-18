<header class="page-header">
    <a class="page-header__logo" href="/">
        <img src="/img/logo.svg" alt="Fashion">
    </a>
    <nav class="page-header__menu">
        <ul class="main-menu main-menu--header">
            <li>
                <a class="main-menu__item <?php if (($title === 'Fashion') && (!isset($_GET['cat1']))) echo 'active'?>" href="/">Главная</a>
            </li>
            <li>
                <a class="main-menu__item <?php if ($_GET['cat1'] == 'new') echo 'active'?>" href="/?cat1=new">Новинки</a>
            </li>
            <li>
                <a class="main-menu__item <?php if ($_GET['cat1'] == 'sale') echo 'active'?>" href="/?cat1=sale">Sale</a>
            </li>
            <li>
                <a class="main-menu__item <?php if (($title === 'Доставка') && (!isset($_GET['cat1']))) echo 'active'?>" href="/delivery.php">Доставка</a>
            </li>
        </ul>
    </nav>
</header>