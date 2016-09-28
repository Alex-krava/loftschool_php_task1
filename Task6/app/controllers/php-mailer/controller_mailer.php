<?php

class Controller_Mailer extends Controller {

    private $mail;

    function __construct()
    {
        $this->mail = new PHPMailer;
    }

    public function mail($mailAdress)
    {

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = 'smtp.yandex.ru';                       // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = 'TestTestAlex';                     // SMTP username
        $this->mail->Password = 'afggasdgh325235rguylu';            // SMTP password
        $this->mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 465;                                    // TCP port to connect to

        $this->mail->From = 'TestTestAlex@yandex.ru';
        $this->mail->FromName = 'TestTestAlex';
        $this->mail->addAddress($mailAdress);                       // Name is optional

        $this->mail->isHTML(true);                                  // Set email format to HTML

        $this->mail->Subject = 'Успешная регистрация';
        $this->mail->Body    = 'Вы зарегестрированы';

        if(!$this->mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $this->mail->ErrorInfo;
        }
    }
}