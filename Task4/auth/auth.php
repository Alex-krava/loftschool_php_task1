<?php
if($_POST){
    require_once '../db/db.config.php';

    $email = strip_tags($_POST['authEmail']);
    $password = strip_tags($_POST['authPass']);

    if($email == '' || $password == ''){
        $arr = array(['Ошибка', 'Все поля должны быть заполненны']);
        echo json_encode($arr);
        exit;
    }

    $sql = "SELECT `email` FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $result = $connection->query($sql);
    $records = $result->fetch_all(MYSQLI_ASSOC);

    if($records){
        session_start();
        $_SESSION['user'] = $records[0]['email'];
        $arr = array(['Авторизация', 'Вы успешно авторизировались']);
        echo json_encode($arr);

    }else{
        $arr = array(['Ошибка', 'Неправельный email или пароль']);
        echo json_encode($arr);
        exit;
    }
} else{
    header('location: ../index.php?page=register');
}
