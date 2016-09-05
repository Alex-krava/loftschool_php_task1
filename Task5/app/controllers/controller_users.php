<?php

class Controller_Users extends Controller {
    function __construct()
    {
        $this->model = new Model_Users();
        $this->view = new View();
    }
    public function action_index()
    {
        session_start();
        $data = $this->model->get_data();

        $count = count($data);

        for($i = 0; $i < $count; $i++){
            if($data[$i]['age'] >= 18){
                $data[$i]['status'] = 'Совершеннолетний';
            }else{
                $data[$i]['status'] = 'Несовершеннолетний';
            }
        }

        if($_SESSION['user']){
            $this->view->generate('users_view.php', $data);
        }
        else{
            header('location: /Task5');
        }
    }
}