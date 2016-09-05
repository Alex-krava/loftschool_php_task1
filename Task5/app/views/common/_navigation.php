<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/Task5">Домашнее задание №5</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
            <?if($_SESSION['user']):?>
                <li><a href="users">Пользователи</a></li>
            <?else:?>
                <li><a href="/Task5">Авторизация</a></li>
                <li><a href="registration">Регистрация</a></li>
            <?endif;?>
            </ul>

            <?if($_SESSION['user']):?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/Task5/logout">Выход</a></li>
                </ul>
            <?endif;?>
        </div>
    </div>
</nav>