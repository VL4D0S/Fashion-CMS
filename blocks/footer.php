<footer class="page-footer">
    <div class="container">
        <a class="page-footer__logo" href="/">
            <img src="../img/logo--footer.svg" alt="Fashion">
        </a>
        <nav class="page-footer__menu">
            <ul class="main-menu main-menu--footer">
                <li>
                    <a class="main-menu__item <?=(($title === 'Fashion') && (!isset($_GET['cat1']))) ? 'active' : ''?>" href="/">Главная</a>
                </li>
                <li>
                    <a class="main-menu__item <?=(isset($_GET['cat1']) && $_GET['cat1'] === 'new') ? 'active' : ''?>" href="/?cat1=new">Новинки</a>
                </li>
                <li>
                    <a class="main-menu__item <?=(isset($_GET['cat1']) && $_GET['cat1'] === 'sale') ? 'active' : ''?>" href="/?cat1=sale">Sale</a>
                </li>
                <li>
                    <a class="main-menu__item <?=(($title === 'Доставка') && (!isset($_GET['cat1']))) ? 'active' : ''?>" href="/delivery.php">Доставка</a>
                </li>
            </ul>
        </nav>
        <address class="page-footer__copyright">
            © Все права защищены
        </address>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/js/scripts.js"></script>