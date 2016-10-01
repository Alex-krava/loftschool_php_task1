<?php

class Controller_Main extends Controller {

    function __construct()
    {
        $this->view = new View();
        if($_POST){

            $email = strip_tags($_POST['authEmail']);
            $password = strip_tags($_POST['authPass']);

            if($email == '' || $password == ''){
                $arr = array(['<p class="error">Ошибка</p>', '<p class="error">Все поля должны быть заполненны</p>']);
                $this->view->generate('main_view.twig', $arr);
                exit;
            }

            $records = Users::where('email', '=', $email)->where('password', '=', $password)->get();

            if(isset($records)){
                session_start();
                $_SESSION['user'] = $records[0]['email'];
                echo "true";
                exit;

            }else{
                $arr = array(['Ошибка', 'Неправельный email или пароль']);
                $this->view->generate('main_view.twig', $arr);
                exit;
        }
        }
    }
    function action_index()
    {
        session_start();
        if($_SESSION['user']){
            echo "true";
        }
        else{
            $this->view->generate('main_view.twig', [array(['user' => false])]);
        }
    }
}