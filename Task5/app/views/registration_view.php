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
    .auth-form_input{
        margin-bottom: 20px;
    }
    .error{
        color: red;
    }
    .successful{
        color: green;
    }
</style>
<?php
require_once 'common/_navigation.php';
?>
<div class="container">
    <?php
    echo $data[0][0];
    echo $data[0][1];
    ?>
    <div class="row">
        <h2 class="col-md-12 text-center">Регистрация</h2>
    </div>
    <form method="POST" class="col-md-4 col-md-offset-4 text-center">

        <input name="email" type="email" class="form-control auth-form_input" placeholder="Введите email">
        <input name="password" type="password" class="form-control auth-form_input" placeholder="Введите пароль">
        <input name="passwordConfirm" type="password" class="form-control auth-form_input" placeholder="Повторите пароль">
        <input type="submit" class="btn btn-default" value="Зарегистрировать">
    </form>
</div>
</body>
</html>

</body>
</html>