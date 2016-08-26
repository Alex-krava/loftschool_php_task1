<?php
session_start();
require_once 'common/modal.php';
?>
<!doctype html>
<html lang="ru">
<?php
$title = 'Домашнее задание №4';
require_once '../Task1/tasks/common/_head.php';
?>
<body>
<style>
    .auth-form{
        margin-top: 25px;
    }
    .auth-form_input{
        margin-bottom: 20px;
    }
</style>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/Task4">Домашнее задание №4</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
            if(isset($_SESSION['user'])) {
                ?>
                <ul class="nav navbar-nav">
                        <li class="<?php if(!$_GET){ echo 'active';}?>"><a href="/Task4">Персональные данные</a></li>
                        <li class="<?php if(strip_tags($_GET['page']) == 'photo'){ echo 'active';}?>"><a href="/Task4?page=photo">Фото</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/Task4/auth/logout.php">Выход</a></li>
                </ul>
            <?php
            }else{
            ?>
                <ul class="nav navbar-nav">
                    <?php
                    if ($_GET['page'] == 'register') {
                        ?>
                        <li><a href="/Task4">Авторизация</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="/Task4?page=register">Регистрация</a></li>
                        <?php
                    }
                    ?>

                </ul>

            <?php
            }
            ?>
        </div>
    </div>
</nav>
<div class="container">

    <?php
    if(isset($_SESSION['user'])){

        if(strip_tags($_GET['page']) == 'photo'){
            require_once 'common/_photo.php';
        }
        else{
            require_once 'common/_personal.data.php';
        }

    }else {
        if ($_GET[page] == 'register') {
            ?>
            <div class="row">
                <h2 class="col-md-12 text-center">Регистрация</h2>
            </div>
            <form method="POST" class="col-md-4 col-md-offset-4 text-center registration-form">
                <?= $msg ?>
                <input name="regEmail" type="email" class="form-control auth-form_input" placeholder="Введите email"
                       required>
                <input name="regPass" type="password" class="form-control auth-form_input" placeholder="Введите пароль"
                       required>
                <input name="regPassConfirm" type="password" class="form-control auth-form_input"
                       placeholder="Повторите пароль" required>
                <input type="submit" class="btn btn-default" value="Зарегистрировать">
            </form>
            <?php
        } else {
            ?>

            <div class="row">
                <h2 class="col-md-12 text-center">Авторизация</h2>
            </div>
            <form method="POST" class="col-md-4 col-md-offset-4 text-center auth-form">
                <input type="email" name="authEmail" class="form-control auth-form_input" placeholder="Введите email">
                <input type="password" name="authPass" class="form-control auth-form_input"
                       placeholder="Введите пароль">
                <input type="submit" class="btn btn-default" value="Войти">
            </form>

            <?php
        }
    }
    ?>
</div>
</body>
</html>