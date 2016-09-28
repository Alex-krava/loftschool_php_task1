<?php

class Controller_Registration extends Controller {

    private $email;
    private $mailer;
    private $password;
    private $passwordConfirm;

    function __construct()
    {
        $this->view = new View();
        $this->mailer = new PHPMailer;

        if($_POST){
            $db = $_POST;

            $this->email = isset($db['email']) ? $db['email'] : null;
            $this->password = isset($db['password']) ? $db['password'] : null;
            $this->passwordConfirm = isset($db['passwordConfirm']) ? $db['passwordConfirm'] : null;

            $connection = @new mysqli('127.0.0.1:3306', 'root', '','loftschool', 3306);

            if($this->email == '' || $this->password == '' || $this->passwordConfirm == ''){
                $data = '';
                $data = array(['<p class="error">Ошибка</p>', '<p class="error">Все поля должны быть заполненны</p>']);
                $this->view->generate('registration_view.twig', $data);
                exit;
            }

            if($this->password != $this->passwordConfirm){
                $data = '';
                $data = array(['<p class="error">Ошибка</p>', '<p class="error">Пароли не совпадают</p>']);
                $this->view->generate('registration_view.twig', $data);
                exit;
            }

            $sql = "SELECT `email` FROM `users` WHERE `email` = '$this->email'";
            $result = $connection->query($sql);
            $records = $result->fetch_all(MYSQLI_ASSOC);

            if(!$records){

                $this->mail($this->email);

                $data = '';
                $sql = "INSERT INTO `users` (`email`, password) VALUES ('{$this->email}','{$this->password}')";
                $result = $connection->query($sql);
                $data = array(['<p class="successful">Регистрация</p>', '<p class="successful">Регистрация прошла успешно</p>']);
                $this->view->generate('registration_view.twig', $data);
                exit;
            }else{
                $data = '';
                $data = array(['<p class="error">Ошибка</p>', '<p class="error">Такой пользователь уже зарегистрирован</p>']);
                $this->view->generate('registration_view.twig', $data);
                exit;
            }
        }
    }

    private $mail;

    public function mail($mailAdress)
    {

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output
        $this->mailer->isSMTP();                                      // Set mailer to use SMTP
        $this->mailer->Host = 'smtp.yandex.ru';                       // Specify main and backup SMTP servers
        $this->mailer->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mailer->Username = 'TestTestAlex';                     // SMTP username
        $this->mailer->Password = 'afggasdgh325235rguylu';            // SMTP password
        $this->mailer->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $this->mailer->Port = 465;                                    // TCP port to connect to

        $this->mailer->From = 'TestTestAlex@yandex.ru';
        $this->mailer->FromName = 'TestTestAlex';
        $this->mailer->addAddress($mailAdress);                       // Name is optional

        $this->mailer->isHTML(true);                                  // Set email format to HTML

        $this->mailer->Subject = 'Successful registration';
        $this->mailer->Body    = 'You are registered';

        if(!$this->mailer->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $this->mailer->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }


    public function action_index()
    {
        session_start();
        if($_SESSION['user']){
            header('location: /users');
        }
        else{
            $this->view->generate('registration_view.twig', [array(['user' => false])]);
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