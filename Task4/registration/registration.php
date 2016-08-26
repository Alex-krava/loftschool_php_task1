<?php
if($_POST){
    require_once '../db/db.config.php';

    $email = strip_tags($_POST['regEmail']);
    $password = strip_tags($_POST['regPass']);
    $passwordConfirm = strip_tags($_POST['regPassConfirm']);

    if($email == '' || $password == '' || $passwordConfirm == ''){
        $arr = array(['Ошибка', 'Все поля должны быть заполненны']);
        echo json_encode($arr);
        exit;
    }

    if($password != $passwordConfirm){
        $arr = array(['Ошибка', 'Пароли не совпадают']);
        echo json_encode($arr);
        exit;
    }

    $sql = "SELECT `email` FROM `users` WHERE `email` = '$email'";
    $result = $connection->query($sql);
    $records = $result->fetch_all(MYSQLI_ASSOC);

    if(!$records){
        $sql = "INSERT INTO `users` (`email`, password) VALUES ('{$email}','{$password}')";
        $result = $connection->query($sql);
        $arr = array(['Регистрация', 'Регистрация прошла успешно']);
        echo json_encode($arr);
        exit;
    }else{
        $arr = array(['Ошибка', 'Такой пользователь уже зарегистрирован']);
        echo json_encode($arr);
        exit;
    }
} else{
    header('location: ../index.php?page=register');
}
