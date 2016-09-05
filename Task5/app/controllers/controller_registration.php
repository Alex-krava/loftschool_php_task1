<?php

class Controller_Registration extends Controller  {

    private $email;
    private $password;
    private $passwordConfirm;

    function __construct()
    {
        $this->view = new View();

        if($_POST){
            $db = $_POST;

            $this->email = isset($db['email']) ? $db['email'] : null;
            $this->password = isset($db['password']) ? $db['password'] : null;
            $this->passwordConfirm = isset($db['passwordConfirm']) ? $db['passwordConfirm'] : null;

            $connection = @new mysqli('127.0.0.1:3306', 'root', '','loftschool', 3306);

            if($this->email == '' || $this->password == '' || $this->passwordConfirm == ''){
                $data = '';
                $data = array(['<p class="error">Ошибка</p>', '<p class="error">Все поля должны быть заполненны</p>']);
                $this->view->generate('registration_view.php', $data);
                exit;
            }

            if($this->password != $this->passwordConfirm){
                $data = '';
                $data = array(['<p class="error">Ошибка</p>', '<p class="error">Пароли не совпадают</p>']);
                $this->view->generate('registration_view.php', $data);
                exit;
            }

            $sql = "SELECT `email` FROM `users` WHERE `email` = '$this->email'";
            $result = $connection->query($sql);
            $records = $result->fetch_all(MYSQLI_ASSOC);

            if(!$records){
                $data = '';
                $sql = "INSERT INTO `users` (`email`, password) VALUES ('{$this->email}','{$this->password}')";
                $result = $connection->query($sql);
                $data = array(['<p class="successful">Регистрация</p>', '<p class="successful">Регистрация прошла успешно</p>']);
                $this->view->generate('registration_view.php', $data);
                exit;
            }else{
                $data = '';
                $data = array(['<p class="error">Ошибка</p>', '<p class="error">Такой пользователь уже зарегистрирован</p>']);
                $this->view->generate('registration_view.php', $data);
                exit;
            }
        }
    }

    public function action_index()
    {
        session_start();
        if($_SESSION['user']){
            header('location: /Task5/users');
        }
        else{
            $this->view->generate('registration_view.php', '');
        }
    }

    public function validate()
    {
        return !empty($this->email) && !empty($this->password);
    }

    public function validatePass()
    {
        return !empty($this->password) && !empty($this->passwordConfirm);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPasswordConfirm()
    {
        return $this->passwordConfirm;
    }

    public function setPasswordConfirm($passwordConfirm)
    {
        $this->passwordConfirm = $passwordConfirm;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}