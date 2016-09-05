<?php

class Controller_Main extends Controller {

    function __construct()
    {
        $this->view = new View();
        if($_POST){
            $connection = @new mysqli('127.0.0.1:3306', 'root', '','loftschool', 3306);

            $email = strip_tags($_POST['authEmail']);
            $password = strip_tags($_POST['authPass']);

            if($email == '' || $password == ''){
                $arr = array(['<p class="error">Ошибка</p>', '<p class="error">Все поля должны быть заполненны</p>']);
                $this->view->generate('main_view.php', $arr);
                exit;
            }

            $sql = "SELECT `email` FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
            $result = $connection->query($sql);
            $records = $result->fetch_all(MYSQLI_ASSOC);

            if($records){
                session_start();
                $_SESSION['user'] = $records[0]['email'];
                header('location: /Task5/users');
                exit;

            }else{
                $arr = array(['Ошибка', 'Неправельный email или пароль']);
                $this->view->generate('main_view.php', $arr);
                exit;
        }
        }
    }
    function action_index()
    {
        session_start();
        if($_SESSION['user']){
            header('location: /Task5/users');
        }
        else{
            $this->view->generate('main_view.php', '');
        }
    }
}