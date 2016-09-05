<!doctype html>
<html lang="ru">
<?php
$title = 'Домашнее задание №5';
require_once '../Task1/tasks/common/_head.php';
?>
<body>
<style>
    .auth-form{
        margin-top: 25px;
    }
    .auth-form_inputs{
        margin-bottom: 20px;
    }
</style>
<?php
require_once 'common/_navigation.php';
?>
<div class="container">
    <div class="row">
        <h2 class="col-md-12 text-center">Авторизация</h2>
    </div>
    <form method="POST" class="col-md-4 col-md-offset-4 text-center auth-form-mvc">
        <input type="email" name="authEmail" class="form-control auth-form_inputs" placeholder="Введите email">
        <input type="password" name="authPass" class="form-control auth-form_inputs" placeholder="Введите пароль">
        <input type="submit" class="btn btn-default" value="Войти">
    </form>
</div>
</body>
</html>

</body>
</html>